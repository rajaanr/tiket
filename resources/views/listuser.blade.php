@extends('dashboard/layouts/main')
@section('isi')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>            
@endif
@if (session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('delete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>            
@endif
    
<div class="table-responsive">
    <table class="table table-striped table-sm table-bordered">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
           <th scope="col" colspan="2">Action</th>
         
        </tr>
      </thead>
      <tbody>@foreach ($users as $user)
          
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="{{ url('edit/'.$user->id) }}"  class="btn btn-success">Edit</a ></td>
          <td><a  class="btn btn-danger" href="{{ url('delete/'.$user->id) }}">Delete</a ></td>
          
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  @endsection