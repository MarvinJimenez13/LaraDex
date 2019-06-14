@extends('layouts.app')

@section('title', 'Trainers')

@section('content')

      <div class="row">
          @foreach ($trainers as $trainer)
        <div class="col-sn">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/{{ $trainer->avatar }}">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              <p class="card-text">{{ $trainer->description }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
          @endforeach
      </div>

@endsection