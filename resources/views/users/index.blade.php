@extends('layouts.app')
@section('sub_nave_projects')
<nav class="navbar navbar-light bg-white shadow-sm">
  <div class="container">
      <span class="navbar-brand mb-0 h1"><i class="far fa-user"></i>   Users</span>
      <ul class="navbar-nav ml-auto">
      </ul>
  </div>
</nav>
@endsection
@section('content')
<div class="container shadow-sm bg-white p-3">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Delete</tr>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>       
            <td>
              <form action="{{route('user.destroy',$user->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"  class="btn btn-outline-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    {{$users->links('pagination::bootstrap-4')}}
</div>
@endsection