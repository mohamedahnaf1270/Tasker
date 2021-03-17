@extends('layouts.app')
@section('sub_nave_projects')
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <div style="background-color:#e9ecef;" class="container-fluid">
    <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Projects</li>
    </ol>
  </div>
</div>
</nav>
@endsection
@section('content')
<div class="container">
    <div class="card p-3">
      <div class="d-flex justify-content-between">
        <span class="mt-2"><h5 class="card-title">Projects</h5></span>
        <div class="text-center mb-3">
          <span><button disabled class="btn btn-primary"></button> - Ongoing</span>
          <span><button disabled class="btn btn-warning ms-1 ml-2"></button> - Pending</span>
          <span><button disabled class="btn btn-success ms-1 ml-2"></button> - Completed</span>
          <span><button disabled class="btn btn-danger ms-1 ml-2"></button> - Cancelled</span>
        </div>
        <a href="{{route('project.create')}}" class="btn btn-dark mb-2">
        Add Project
        </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Start date</th>
          <th scope="col">End date</th>
          <th scope="col">PM</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
        <tr>
          <th scope="row">{{$project->id}}</th>
          <td><span><button disabled class="btn btn-{{$project->color}} mr-2"></button>{{$project->title}}</td>
          <td>{{$project->start_date}}</td>
          <td>{{$project->end_date}}</td>
          <td>{{$project->projectmanager_id}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton{{$project->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$project->id}}">
                        <li><a class="dropdown-item" href="{{route('project.edit',$project->id)}}">Edit</a></li>
                        <li>
                            <form action="{{route('project.destroy',$project->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="dropdown-item">Delete</button>
                            </form>
                        </li>
                        <li><a class="dropdown-item" href="{{route('project.show',$project->id)}}">Show</a></li>
                    </ul>
                </div>
            </td>
        </tr>
          @endforeach
      </tbody>
    </table>
    {{$projects->links('pagination::bootstrap-4')}}
  </div>
</div>
@endsection
