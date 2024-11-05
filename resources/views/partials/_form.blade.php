@csrf
<div class="mb-3">
  <label for="title" class="form-label">Título</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title )}}">
</div>
<div class="row">
  <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
    <label for="ur_clean" class="form-label">Categoría</label>
    <select class="form-select" aria-label="Categorías" name="category_id">
      <option disabled>Seleccione una categoría</option>
        @foreach ($categories as $category)
          <option value="{{$category->id}}" @if ($post->category_id == $category->id)  selected @endif>
            {{$category->name}}
          </option>          
        @endforeach
    </select>
  </div>
  <div class="mb-3 col-12 col-sm-12 col-md-6 col-xl-3">
    <label for="ur_clean" class="form-label">URL</label>
    <input type="text" class="form-control" id="ur_clean" name="url_clean" value="{{ old('url_clean', $post->url_clean)}}">
  </div>
</div>


<div class="mb-3">
  <label for="content" class="form-label">Contenido</label>
  <input type="text" class="form-control" id="content" name="content" value="{{ old('content', $post->content) }}">
</div>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="posted" name="posted">
  <label class="form-check-label" for="posted">Publicado</label>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>