@extends('layouts.app')
@section('content')
        <div class="container shadow-sm bg-white p-3">
            <div class="mb-3">
        <form action="{{route('task.update' , $Task->id)}}" method="POST">
            @method('PUT')
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$Task->name}}" placeholder="name@example.com">
        </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="to-do" @if($Task->status=="to-do")selected @endif>To-Do</option>
                <option value="in-progress" @if($Task->status=="in-progress")selected @endif>In-Progress</option>
                <option value="backlog" @if($Task->status=="backlog")selected @endif>Backlog</option>
                <option value="done" @if($Task->status=="done")selected @endif>Done</option>
                <option value="on-hold" @if($Task->status=="on-hold")selected @endif>On-hold</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                </div>
            </div>
@endsection
