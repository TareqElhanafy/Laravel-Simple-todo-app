@extends('layouts.app')
@section('content')
      <h1 class="text-center my-5">{{$showtodo->name}}</h1>

      <div class="row justify-content-center ">
        <div class="col-md-8">
          <div class="card card-default">
            <div class="card-header">
              Details
            </div>
            <div class="card-body">
              {{$showtodo->description}}

            </div>
            <a href="/todos/{{$showtodo->id}}/edit" class="btn btn-primary">Edit</a>
            <br>
            <a href="/todos/{{$showtodo->id}}/delete" class="btn btn-danger">Delete</a>

          </div>
        </div>
      </div>
@endsection
