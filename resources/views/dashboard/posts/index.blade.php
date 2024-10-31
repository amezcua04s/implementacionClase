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
                {{-- method="POST" <- Incluir ese parametro en form, despues de la ruta--}}
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar este post?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Si acepta, ya no se podrán reestablecer los cambios...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">noooOO</button>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Si quiero eliminarlo</button>
                        </div>
                      </div>
                    </div>
              
                  </div>
                 
                </form>
          
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