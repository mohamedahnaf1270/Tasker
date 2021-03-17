@extends('layouts.app')
@section('content')
    <div class="container shadow-sm bg-white p-3">
        <div class="mb-3">
            <form action="{{route('task.store')}}" method="POST">
                <input hidden name="project_id" value="{{$project_id}}"/>
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">User id</label>
                    <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
