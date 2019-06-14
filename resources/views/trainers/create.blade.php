@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
  <form class="form-group" action="/trainers" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Nombre:</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Avatar:</label>
      <input type="file" name="avatar">
    </div>
    <div class="form-group">
      <label for="">Descripcion:</label>
      <input type="text" name="description" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
