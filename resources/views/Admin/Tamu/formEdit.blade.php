@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Buku Tamu
        </div>
        <div class="card-body">
            <form action="{{url('admin/update-data/'.$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="{{$data->nama}}">
                  </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="telepon" value="{{$data->tlp}}">
                  </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                 <textarea name="alamat" class="form-control">{{$data->alamat}}</textarea>
                </div>
                <div class="form-group">
                  <label class="form-label"><b>Pekerjaan</b></label>
                  <select class="form-select mb-3 shadow-none" name="pekerjaan" id="pekerjaan">
                      <option disabled value>Pilih Pekerjaan</option>
                      @foreach ($pekerjaan as $p)
                      <option value="{{ $p->id }}">{{ $p->jenis_pekerjaan }}</option>
                      @endforeach
                  </select>
              </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{$data->email}}">
                </div>
                <input type="hidden" value="{{$data->id}}" name="id">
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ url('admin/tamu')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection