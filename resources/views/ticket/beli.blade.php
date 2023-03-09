@extends ('dashboard/layouts/main')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tiket.css') }}">
@endsection
@section('isi')
<div class="table-responsive mt-4">
  <form action="{{ url('buy/'.$ticket->id)}}" method="POST">@csrf
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
        <td scope="col"><input type="text" disabled id="" value="{{ $ticket->id }}" name="qty" class="form-control rounded-0"></td>
      </tr>
      <tr hidden>
        <td scope="col">Id</td>
        <td scope="col">:</td>
        <td scope="col"><input type="text" name="id_ticket" id="" value="{{ $ticket->id }}" name="qty" class="form-control rounded-0 "></td>
      </tr>
      <tr>
        <td scope="col">Date</td>
        <td scope="col">:</td>
        <td scope="col"><input type="text" disabled id="" value="{{ $ticket->date }}"  class="form-control rounded-0"></td>
      </tr>
      <tr>
        <td scope="col"> <label for="" class="">Quota </label></td>
        <td scope="col">:</td>
        <td scope="col">  <input type="text" disabled id="" value="{{ $ticket->quota }}"  class="form-control rounded-0"></td>
      </tr>
      <tr>
        <td scope="col"> <label for="" class="">Price </label></td>
        <td scope="col">:</td>
        <td scope="col">  <input type="text" disabled id="number1" value="{{ $ticket->price }}"  class="form-control rounded-0"></td>
      </tr>
      <tr>
        <td scope="col"> <label for="" class="">QTY </label></td>
        <td scope="col">:</td>
        <td scope="col">  <input type="text"  id="number2" value="" name="qty" class="form-control rounded-0"></td>
      </tr>
      <tr>
        <td scope="col"> <label for="" class="">Amount </label></td>
        <td scope="col">:</td>
        <td scope="col">  <input type="text"  id="result" value="" name="amount" class="form-control rounded-0"></td>
      </tr>
    </tbody>
  </table>
  <div class="mb-3 tiket">
    <label for="" class=" form-label">Customer Name</label>
    <select name="id_users" class="form-select" aria-label="Default select example">@foreach ($user as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
      </select>
</div>
</div>
<button type="submit" class="mt-3 btn btn-primary">Beli Sekarang</button>
</form>


 
  

@endsection
@section('script')
<script>
 document.getElementById('number1').addEventListener('input', calculate);
    document.getElementById('number2').addEventListener('input', calculate);

    function calculate() {
        // Mendapatkan nilai dari kedua input
        let num1 = document.getElementById('number1').value;
        let num2 = document.getElementById('number2').value;

        // Mengalikan kedua nilai
        let result = num1 * num2;

        // Menampilkan hasil pada input yang dituju
        document.getElementById('result').value = result;
  }
</script>
    
@endsection
