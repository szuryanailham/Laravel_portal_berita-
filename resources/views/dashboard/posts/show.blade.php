@extends('dashboard.layouts.main')
@section('container')
<div class="conatiner">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i>Back to my Post</a>
                <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                <a href="" class="btn btn-danger"> <i class="bi bi-trash"></i> Delete</a>

                {{-------- image ----------}}
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt={{ $post->category->name }}>
               <article class="my-3 fs-5">
                {!! $post->body !!}
               </article>
            </article>
        </div>
    </div>
</div>
@endsection