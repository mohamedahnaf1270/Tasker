@extends('layouts.app')
@section('content')
<form action="{{route('project.update',$project->id)}}" method="POST">
  @method('PUT')
  @csrf
<div class="container shadow-sm bg-white p-3">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input value="{{$project->title}}" name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Details</label>
    <input value="{{$project->details}}" name="details" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Start date</label>
    <input value="{{$project->start_date}}" name="start_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">End date</label>
    <input value="{{$project->end_date}}" name="end_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option @if($project->status=="pending")selected @endif>Pending</option>
      <option @if($project->status=="ongoing")selected @endif>Ongoing</option>
      <option @if($project->status=="completed")selected @endif>Completed</option>
      <option @if($project->status=="cancelled")selected @endif>Cancelled</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Project Manager id</label>
    <select name="projectmanager_id" class="form-control" id="exampleFormControlSelect1">
      @foreach ($users as $user)
      <option  @if($project->projectmanager_id==$user->id)selected @endif value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Color</label>
    <select name="color" class="form-control" id="exampleFormControlSelect1">
        <option @if($project->color=="primary")selected @endif>primary</option>
        <option @if($project->color=="warning")selected @endif>warning</option>
        <option @if($project->color=="danger")selected @endif>danger</option>
        <option @if($project->color=="success")selected @endif>success</option>
      </select>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
</div>
</form>
@endsection
@section('sub_nave')
<nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><i class="far fa-check-square"></i>   Projects</span>
    </div>
</nav>
@endsection