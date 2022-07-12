@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Ekonomi dan Perdagangan
        </div>
        <div class="card-body">
            <form action="{{url('Ekopangan/'.$jenisEkopangan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="jenis">Jenis Ekonomi dan Perdagangan</label>
                    <input type="text" class="form-control" name="jenis" id="jenis" aria-describedby="jenis" value="{{$jenisEkopangan->jenis_ekonomiperdagangan}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('Ekopangan.index')}}" class="btn btn-primary">Kembali</a>
              </div>
        </div>
      </div>
</div>
@endsection