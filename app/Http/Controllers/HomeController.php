<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects=Project::whereHas('tasks',function($task){
            $task->where('user_id',auth()->user()->id);
    })->take(3)->get();
        return view('home')->with(compact('projects'));
    }
}
