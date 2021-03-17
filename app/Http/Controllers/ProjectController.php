<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::paginate(50);
        return view('project.index')->with(compact('projects'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('project.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newprojects = new project();
        $newprojects->title =$request->title;
        $newprojects->details =$request->details;
        $newprojects->start_date =$request->start_date;
        $newprojects->end_date =$request->end_date;
        $newprojects->status =$request->status;
        $newprojects->projectmanager_id =$request->projectmanager_id;
        $newprojects->color =$request->color;
        $newprojects->save();

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=Project::with('tasks.user')->find($id);
        $project->taskGroup=$project->tasks->groupBy('status');
        return view('project.show')->with(compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::all();
        $project = project::find($id);
        return view('project.edit')->with(compact('project','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projects = Project::find($id);
        $projects->title =$request->title;
        $projects->details =$request->details;
        $projects->start_date =$request->start_date;
        $projects->end_date =$request->end_date;
        $projects->status =$request->status;
        $projects->projectmanager_id =$request->projectmanager_id;
        $projects->color =$request->color;
        $projects->save();

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::destroy($id);
        return redirect()->route('project.index');
    }
}
