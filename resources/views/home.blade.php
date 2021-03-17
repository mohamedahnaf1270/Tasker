@extends('layouts.app')

@section('content')
<div class="container shadow-sm bg-white p-3">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="container mb-5">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$project->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$project->status}}</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card-group">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-center">Latest</h5>
          <p class="card-text d-flex justify-content-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam placeat repellat veritatis nobis architecto cum ad fugiat eos quo deserunt dolores, voluptates sed cumque, quis praesentium vero in pariatur ipsum!</p>
          <ul>
            <li>Project name - ipsum dolor sit amet</li>
            <li>Project manager - Ahnaf</li>
            <li>Status - Ongoing</li>
          </ul>
          <hr style="border-style: dashed">
          <div class="progress">
            <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-group">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title d-flex justify-content-center">Edits done - ipsum dolor sit amet</h5>
          <ul>
            <li>Added UX for Admin page - Savanna <small class="text-muted">21:30</small>
            <li>Eliminated bug on Admin page - Tatum <small class="text-muted">20:30</small>
            <li>Started on admin page - Malika <small class="text-muted">14:30</small>
              <a href="https://github.com/mohamedahnaf1270" class="d-flex justify-content-start">Closed git Repo for ipsum dolor sit amet </a>
          </ul>
          </div>
      </div>
    </div>
<div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Manage Projects</h5>
        <p class="card-text d-flex justify-content-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam placeat repellat veritatis nobis architecto cum ad fugiat eos quo deserunt dolores, voluptates sed cumque, quis praesentium vero in pariatur ipsum!</p>
        <a href="{{route('project.index')}}" class="btn btn-outline-dark d-flex justify-content-center">Projects</a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">Manage Users</h5>
        <p class="card-text d-flex justify-content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis autem quidem quam ipsum minus itaque adipisci, impedit unde? Blanditiis maxime ea labore! Facilis nobis quas atque aliquam blanditiis nostrum deleniti?</p>
        <a href="{{route('user.index')}}" class="btn btn-outline-dark d-flex justify-content-center">Users</a>
      </div>
    </div>
  </div>
</div>
@endsection
