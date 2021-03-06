@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Media Pelayanan
        </div>
        <div class="card-body">
            <form action="{{url('mPelayanan/'.$mediaLayanan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="mLayanan">Media Pelayanan</label>
                    <input type="text" class="form-control" name="mLayanan" id="mLayanan" aria-describedby="mLayanan" value="{{$mediaLayanan->jenis_mediaPelayanan}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('mPelayanan.index')}}" class="btn btn-primary">Kembali</a>
              </div>
        </div>
      </div>
</div>
@endsection