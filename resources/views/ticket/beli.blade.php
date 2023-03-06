@extends ('dashboard/layouts/main')
@section('isi')
<form>
    <div class="mb-3">
        <label for="" class=" form-label">User</label>
        <select name="id_category" class="form-select" aria-label="Default select example">@foreach ($users as $item)

            <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
          </select>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Kategori</label>
      <input disabled placeholder="{{ $ticket->name }}" name="name" value="" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tanggal</label>
    <input type="text" disabled placeholder="{{ $ticket->date }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Amount</label>
      <input type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div>
    <label for="exampleInputPassword1" class="form-label">Qty</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Beli Sekarang</button>
  </form>
@endsection
