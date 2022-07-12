@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Pendidikan
    </div>
    <div class="card-body">
        <div class="form-group">
          <form action="{{route('pendidikan.store')}}" method="post">
            @csrf
          <label for="pendidikan">Pendidikan</label>
          <input type="text" class="form-control" name="pendidikan" id="pendidikan" aria-describedby="nama">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('pendidikan.index')}}" class="btn btn-primary">Kembali</a>
    </div>
    </div>
  </div>
</div>
@endsection