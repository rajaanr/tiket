@extends('dashboard/layouts/main')
@section('style')
<link href="{{ asset('css/sign-in.css') }}" rel="stylesheet">
@endsection
@section('isi')
<main class="isi form-signin w-100 m-auto">
    <form action="{{ url('update/'.$users->id) }}" method="POST">
        @csrf @method('PUT')
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>            
        @endif
      <h1 class="h3 mb-3 fw-normal text-center">Edit Data</h1>
  
      <div class="form-floating">
        <input type="text" value="{{ $users->name }}" name="name" class="form-control rounded-top rounded-0" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
        @error('name')
        <div class="text-danger"> {{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email"  value="{{ $users->email }}" name="email" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Email</label>
        @error('email')
        <div class=" text-danger"> {{ $message }}</div>
        @enderror
      </div>
      <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Edit Data</button>
      <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>
    
    
@endsection