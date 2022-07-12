@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Media Pelayanan
    </div>
    <div class="card-body">
        <div class="form-group">
          <form action="{{route('mPelayanan.store')}}" method="post">
            @csrf
          <label for="media">Media Pelayanan</label>
          <input type="text" class="form-control" name="media" id="media" aria-describedby="media">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('mPelayanan.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection