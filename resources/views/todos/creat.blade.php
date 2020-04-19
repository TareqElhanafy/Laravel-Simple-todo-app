@extends('layouts.app')
@section('content')
<h1 class="text-center">Creat Todos</h1>
<div class="row justify-content-center my-5">
  <div class="col-md-6">
    <div class="card card-default">
      <div class="card-header">
        create Todo
      </div>
      <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
          <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group-item">{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form class="" action="/storedata" method="post">
          @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
          <textarea name="description"class="form-control" rows="8" cols="80" placeholder="Description"></textarea>
          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-success" name="button">Creat new Todo</button>
          </div>
        </form>

      </div>
      </div>
    </div>
  </div>



@endsection
