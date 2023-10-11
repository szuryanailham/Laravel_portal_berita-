@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf
        {{-- new name user --}}
        <div class="form-floating">
          <input name="name" value="{{ old('name') }}" type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback p-2">
            {{ $message }}
          </div>
          @enderror
        </div>
        {{-- akhir new name user --}}

      {{-- username  --}}
      <div class="form-floating">
        <input name="username" value="{{ old('username') }}" type="text" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="username" required>
        <label for="username">Username</label>
        @error('username')
          <div class="invalid-feedback p-2">
            {{ $message }}
          </div>
          @enderror
      </div>
      {{-- akhir username  --}}

      {{-- email  --}}
      <div class="form-floating">
        <input type="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required>
        <label for="email">Email adress</label>
        @error('email')
          <div class="invalid-feedback p-2">
            {{ $message }}
          </div>
          @enderror
      </div>
      {{-- akhir email --}}
      <div class="form-floating">
        <input type="password"  class="form-control rounded-button  @error('password') is-invalid @enderror" name="password" id="password" placeholder="password" required>
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback p-2">
            {{ $message }}
          </div>
          @enderror
      </div>
      {{-- password --}}

      {{-- akhir password --}}
   
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register </button>
      </form>
      {{-- link to registrasi --}}
      <small class='d-block text-center mt-3'>
        Already registered ? <a href="/login">Login</a>
      </small>
    </main>
  </div>
</div>

@endsection