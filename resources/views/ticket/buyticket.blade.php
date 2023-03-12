@extends('dashboard/layouts/main')
@section('isi')
@auth
    @if (auth()->user()->role == 'admin')
    <div class="mb-3 text-end"><a href="/addticket" class=" btn btn-dark">Buat Tiket</a></div>
    @endif
    @if (auth()->user()->role == 'operator')
    <div class=" mb-3 text-end"><a href="/addticket2" class=" btn btn-dark">Buat Tiket</a></div>
    @endif
@endauth
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
      

  <div class="table-responsive mt-4">
    <table class="table table-striped table-sm table-bordered">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Kategori</th>
          <th scope="col">Status</th>
          <th scope="col">Quota</th>
          <th scope="col">Price</th>
          <th scope="col">Date</th>
           <th scope="col" colspan="2">Action</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($tiket as $item)

          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->quota }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->date }}</td>

            @auth
            @if (auth()->user()->role == 'admin')
            <td><a  class="btn btn-success" href="{{ url('buy/'.$item->id) }}">Buy</a ></td>
              <td><a  class="btn btn-danger" href=" ">Delete</a ></td>
            @endif
            @if (auth()->user()->role == 'operator')
            <td><a  class="btn btn-success" href="{{ url('buy/'.$item->id) }} ">Buy</a ></td>
              <td><a  class="btn btn-danger" href=" ">Delete</a ></td>
            @endif
            @if (auth()->user()->role == 'customer')
            <td><a  class="btn btn-success" href="{{ url('buy/'.$item->id) }}">Buy</a ></td>

            @endif

            @endauth


            </tr>
            @endforeach

      </tbody>
    </table>
  </div>
@endsection
