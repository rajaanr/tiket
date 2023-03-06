@extends ('dashboard/layouts/main')
@section('isi')
<div class="table-responsive mt-4">
  <table class="table ">
    <thead class=" mb-3">
      <tr>
      <td colspan="3">Ticket Information</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="col">Id</td>
        <td scope="col">:</td>
        <td scope="col">{{ $ticket->id }}</td>
      </tr>
      <tr>
        <td scope="col">Date</td>
        <td scope="col">:</td>
        <td scope="col">{{ $ticket->date }}</td>
      </tr>
      <tr>
        <td scope="col">Quota</td>
        <td scope="col">:</td>
        <td scope="col">{{ $ticket->quota }}</td>
      </tr>
      <tr>
        <td scope="col">Price</td>
        <td scope="col">:</td>
        <td scope="col">{{ $ticket->price }}</td>
      </tr>
    </tbody>
  </table>
</div>
<form>
    <div class="mb-3">
        <label for="" class=" form-label">Customer Name</label>
        <select name="id_users" class="form-select" aria-label="Default select example">@foreach ($users as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
          </select>
    </div>

    <button type="submit" class="mt-3 btn btn-primary">Beli Sekarang</button>
  </form>
@endsection
