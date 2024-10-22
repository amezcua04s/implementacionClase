@extends('layouts.master')

@section('content')
<div class="col-12 mb-4">
    <a class="btn btn-primary" href="{{ route('post.create') }}">Agregar</a>
</div>

<div class="col-12">
  <table class="table table-hover table-striped">
    <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">URL</th>
            <th scope="col">Publicado</th>
            <th scope="col">Opciones </th> 
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($posts as $post)
            <tr>
              <th scope="row"> {{ $post->id }} </th>
              <td> {{ $post->title }} </td>
              <td> {{ $post->url_clean }} </td>
              <td> {{ $post->posted }} </td>
              <td>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">
                  Editar
                </a>
                <a href=" {{ route('post.destroy', $post->id) }}" class="btn btn-danger">
                  Eliminar
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="col-12">
        {{ $posts->links() }}
      </div>
      
@endsection