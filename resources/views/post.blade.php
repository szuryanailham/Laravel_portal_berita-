
@extends('layouts.main')

@section('container')

<div class="conatiner">
    <div class="row justify content-cente mb-5">
        <div class="col-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By.<a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>

                {{-------- image ----------}}
                @if ($post->image)
                <div style="max-height:350px;overflow:hidden;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt={{ $post->category->name }}>
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt={{ $post->category->name }}>
                @endif
              
               <article class="my-3 fs-5">
                {!! $post->body !!}
               </article>
            </article>
        </div>
    </div>
</div>
    

    <a href="/blog">Back to Posts</a>
@endsection