@extends('home')
@section('homecontent')
<div class="container">
    @foreach($projects as $project)
    <div class="row">
        <div class="card-header bg-{{$project->color}}">
        
          </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$project->title}}</h5>
              <p class="card-text">{{$project->details}}</p>
            </div>
            <div class="card-footer text-muted">
                {{$project->start_date}}
              </div>
          </div>
        </div>
      </div>
      @endforeach
</div>
@endsection
