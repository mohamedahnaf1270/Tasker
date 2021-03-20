@extends('layouts.app')
@section('content')
<form action="{{route('project.store')}}" method="POST">
  @csrf
<div class="container shadow-sm bg-white p-3">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Details</label>
    <input name="details" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Start date</label>
    <input name="start_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">End date</label>
    <input name="end_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="pending">Pending</option>
      <option value="on-going">Ongoing</option>
      <option value="completed">Completed</option>
      <option value="cancelled">Cancelled</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Project Manager id</label>
    <select name="projectmanager_id" class="form-control" id="exampleFormControlSelect1">
      @foreach ($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    {{-- <label for="exampleFormControlInput1" class="form-label">Color</label>
    <select name="color" class="form-control" id="exampleFormControlSelect1">
        <option>primary</option>
        <option>warning</option>
        <option>danger</option>
        <option>success</option>
      </select> --}}
      <div class="mt-3">
        <button type="submit" href="{{route('project.create')}}" class="btn btn-primary">Submit</button>
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
