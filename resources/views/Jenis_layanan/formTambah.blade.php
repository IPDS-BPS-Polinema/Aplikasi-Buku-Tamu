@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Layanan
    </div>
    <div class="card-body">
        <div class="form-group">
          <form action="{{route('jLayanan.store')}}" method="post">
            @csrf
          <label for="jenis">Jenis Layanan</label>
          <input type="text" class="form-control" name="jenis" id="jenis" aria-describedby="jenis">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button">
        <a href="{{ route('jLayanan.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection