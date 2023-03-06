@extends('dashboard/layouts/main')
@section('isi')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="text-center">
    <label for="">Add Ticket</label>
</div>
<form action="/addticket" method="POST">@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Date</label>
      <input type="date" name="date" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Quota</label>
      <input type="text" name="quota" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input type="text" name="price" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="" class=" form-label">Kategori Tiket</label>
        <select name="id_category" class="form-select" aria-label="Default select example">@foreach ($id as $item)

            <option value="{{ $item->id }}">{{ $item->category }}</option>
                @endforeach
          </select>
    </div>

    <button type="submit" class="btn btn-primary">Add Ticket</button>
  </form>
@endsection
