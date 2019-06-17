@extends('layouts.app')

@section('title', 'Trainers Edit')


//también puedo utilizar laravel collective con metodo put y todo :P
@section('content')
  <form class="form-group" action="/trainers/{{$trainer->slug }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="">Nombre:</label>
      <input type="text" name="name"  value="{{ $trainer->name }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Avatar:</label>
     <img src="/images/{{ $trainer->avatar }}"
      class="card-img-top rounded-circle  d-block"
      style="height: 100px;
      width:100px; background-color:#EFEFEF; margin:20px;">
      <input type="file" name="avatar">
    </div>
    <div class="form-group">
      <label for="">Descripcion:</label>
      <input type="text" name="description" value="{{ $trainer->description }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection
