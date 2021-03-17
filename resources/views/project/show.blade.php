@extends('layouts.app')
@section('sub_nave')
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <span class="navbar-brand mb-0 h1">  <i class="las la-tasks"></i>{{$project->title}}<small class="text-muted ml-3">{{$project->start_date->diffForHumans()}}</small></span>
            <div class="d-flex justify-content-between align-items-center">
                <form action="{{route('task.create')}}" method="GET" class="form-inline">
                    <input hidden name="project_id" value="{{$project->id}}"/>
                    <button class="btn my-2 my-sm-0" type="submit">
                        <i class="las la-plus-circle text-info" style="font-size: 25px;"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
@endsection
@section('content')
    <div class="container-fluid" style="height:calc(100vh - 271px);">
            <div class="row">
                @foreach($project->taskGroup as $key=>$tasks)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ucfirst($key)}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Thing that we have to do</h6>
                            <div class="list-group">
                                @foreach($tasks as $task)
                                <a  href="{{route('task.edit' , $task->id)}}" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$task->name}}</h5>
                                        <small>{{$task->created_at->diffForHumans()}}</small>
                                    </div>
                                    <small><i class="fas fa-user-circle"></i>    {{$task->user->name}}</small>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
@endsection
