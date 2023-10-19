
@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- Fiture Search  --}}
<div class="row justify-content-lg-center mb-3">
  <div class="col-md-6">
    <form action="blog">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif

      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
  @endif
      <div class="input-group mb-3">
        <input value="{{ request('search') }}" type="text" class="form-control" placeholder="Search ......" name="search">
        <button class="btn btn-danger" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>
{{-- akhir Fiture Search --}}
@if ($posts->count())
<div class="card mb-3">
  @if ($posts[0]->image)
  <div style="max-height:400px;overflow:hidden;">
      <img src="{{ asset('storage/'.$posts[0]->image) }}" alt={{ $posts[0]->category->name }}>
  </div>
  @else
  <img src="https://source.unsplash.com/1600x900/?{{ $posts[0]->category->name }}" class="card-img-top" alt={{ $posts[0]->category->name }}>
  @endif
  
    <div class="card-body text-center">
      <h3 class="card-title"><a class="text-decoration-none" href="posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
     <small>
        <p>By <a class="text-decoration-none"  href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
    </small>
        <p class="card-text" class="text-body-secondary"{{ $posts[0]->created_at->diffForHumans()}}</p>
        <a class="text-decoration-none  btn btn-primary mt-2" href="posts/{{ $posts[0]->slug }}">Read More</a>
    </div>
  </div>


<div class="container">
    <div class="row"> 
        @foreach ($posts->skip(1) as $item)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div style="background-color:rgba(0,0,0,0.7)" class="position-absolute p-2 "><a class="text-white text-decoration-none" href="posts/{{ $item->slug }}">{{ $item->category->name }}</a></div>
                @if ($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}" alt={{ $item->category->name }}>
                @else
                <img src="https://source.unsplash.com/500x400/?{{ $item->category->name }}"class="card-img-top" alt="...
                ">
                @endif
              
                <div class="card-body">
                  <h5 class="card-title">{{ $item->title }}</h5>
                  <small>
                    <p>By <a class="text-decoration-none"  href="/blog?author={{ $item->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $item->category->slug }}">{{ $item->category->name }}</a> </p>
                    <p class="card-text">{{ $item->excerpt }}</p>
                </small>
                  <p class="card-text">{{ $item->excerpt }}</p>
                </div>
                <a href="posts/{{ $item->slug }}" class="btn btn-primary">Read More </a>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No post found .</p>
@endif

{{-- Pagination  --}}

<div class="d-flex justify-content-center m-4 ">
  {{ $posts->links() }}
</div>
@endsection
    
