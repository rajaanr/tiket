@extends ('dashboard/layouts/main')
@section('isi')
<form>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Kategori</label>
      <input value="" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tanggal</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Quota</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div>
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Beli Sekarang</button>
  </form>
@endsection