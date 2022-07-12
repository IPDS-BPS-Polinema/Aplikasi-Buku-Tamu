@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Pendidikan
        </div>
        <div class="card-body">
            <form action="{{url('pendidikan/'.$pendidikan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" id="nama" aria-describedby="nama" value="{{$pendidikan->jenis_pendidikan}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('pendidikan.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection