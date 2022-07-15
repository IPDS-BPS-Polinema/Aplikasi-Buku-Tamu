@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Data Transaction
    </div>
    <div class="card-body">
      <form action="{{route('transaksi.store')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="media">Media</label>
          <input type="text" class="form-control" name="media" id="media" aria-describedby="media">
        </div>
        <div class="form-group">
          <label for="pelayanan">Pelayanan</label>
          <input type="text" class="form-control" name="pelayanan" id="pelayanan" aria-describedby="pelayanan">
        </div>
        <div class="form-group">
          <label for="sarana">Sarana</label>
          <input type="text" class="form-control" name="sarana" id="sarana" aria-describedby="sarana">
        </div>
        <div class="form-group">
          <label for="kualitasdata">Kualitas Data</label>
          <input type="text" class="form-control" name="kualitasdata" id="kualitasdata" aria-describedby="kualitasdata">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('transaksi.index')}}" class="btn btn-primary">Kembali</a>
    </div>
    </div>
  </div>
</div>
@endsection
