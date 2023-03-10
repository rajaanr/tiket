@extends('layouts/navbar')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
@endsection
@section('body')
<main bgcolor="white" class="isi form-signin w-100 m-auto">
    <form action="/login" method="POST">
        @csrf
        @if (session()->has('Error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('Error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class=" text-danger"> {{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class=" text-danger"> {{ $message }}</div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <label class=" mt-3">belum memiliki akun? silahkan <a href="/register">Register</a></label>
      <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>

@endsection
