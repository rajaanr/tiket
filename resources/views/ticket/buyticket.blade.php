@extends('dashboard/layouts/main')
<<<<<<< HEAD
@section('isi')
    <h2>beli</h2>
@endsection
=======
@section('style')
<link href="{{ asset('css/sign-in.css') }}" rel="stylesheet">

@endsection
@section('isi')
<main class="isi form-signin w-100 m-auto">
    <form action="/register" method="POST">
        @csrf
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      <h1 class="h3 mb-3 fw-normal text-center">Buy Ticket</h1>

      <div class="form-floating rounded-0">
        <select class="form-select" name="qty" aria-label="Disabled select example" >
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
      </div>
      <div class="form-floating rounded-0">
        <select class="form-select" name="amount" aria-label="Disabled select example" >
            <option value="4000">4000</option>
            <option value="5000">5000</option>
            <option value="6000">6000</option>
            <option value="7000">7000</option>
            <option value="8000">8000</option>
            <option value="10000">10000</option>
          </select>
        @error('email')
        <div class=" text-danger"> {{ $message }}</div>
        @enderror
      </div>


      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Buy Ticket</button>
      <p class="mt-3 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>
@endsection
>>>>>>> 33421218b903c695cb36c507eb0d359c4706b76c
