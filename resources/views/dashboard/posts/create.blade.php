@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('post.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Título</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="ur_clean" class="form-label">URL</label>
      <input type="text" class="form-control" id="ur_clean" name="url_clean">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Contenido</label>
      <input type="text" class="form-control" id="content" name="content">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="posted" name="posted">
      <label class="form-check-label" for="posted">Publicado</label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection