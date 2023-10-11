@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>
<div class="table-responsive col-lg-8 ">
  <a class="btn btn-primary mb-3" href="/dashboard/posts/create">Create New post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td class="d-flex justify-content-lg-between p-3">
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info ms-1">
            <i class="bi bi-eye"></i>
          </a>
          <a href="" class="badge bg-warning mr-1">
            <i class="bi bi-pencil"></i>
          </a>
          <a href="" class="badge bg-danger">
            <i class="bi bi-trash"></i>
          </a>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
@endsection