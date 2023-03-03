@extends('layouts/navbar')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
@endsection
@section('body')
<main class="isi form-signin w-100 m-auto">
    <form action="/register" method="POST">
        @csrf
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top rounded-0" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
        @error('name')
        <div class="text-danger"> {{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Email</label>
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


      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <label class=" mt-3">Sudah memiliki akun? silahkan <a href="/login">Login</a></label>
      <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>

@endsection
