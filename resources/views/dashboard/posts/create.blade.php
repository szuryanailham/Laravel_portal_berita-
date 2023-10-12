@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>
  <div class="col-lg-8">
  
    <form method="post" action="/dashboard/posts">
      {{-- INPUT --}}
     @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title">
        @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      {{-- SLUG --}}
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" disabled readonly>
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
      </div>
     <div class="mb-3">
      <label for="chategory" class="form-label">chategory</label>
      <select class="form-select form-select-md" name="category_id">
        <option selected>Open this select menu</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
     </div>
     <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror 
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
     </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
  </div>
  <script>
    const title = document.querySelector('#title');
    const slug  = document.querySelector("#slug");

    title.addEventListener('change',()=>{
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response=> response.json()).then(data => slug.value = data.slug)
    });

    document.addEventListener("trix-file-accept", event => {
  event.preventDefault()
})
  </script>
@endsection