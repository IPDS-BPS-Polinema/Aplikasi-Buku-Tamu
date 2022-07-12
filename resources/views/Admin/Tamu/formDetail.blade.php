@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i>Customer</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Tamu</td>
                        <td>:</td>
                        <td>{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $data->tlp }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td>{{ $data->usia }}</td>
                    </tr>
                    <tr>
                        <td>Nama Instansi</td>
                        <td>:</td>
                        <td>{{ $data->instansi }}</td>
                    </tr>
                    <tr>
                        <td>NIP/NIM</td>
                        <td>:</td>
                        <td>{{ $data->nipnim }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>{{ $data->jpendidikan->jenis_pendidikan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $data->jpekerjaan->jenis_pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>MediaPelayanan</td>
                        <td>:</td>
                        <td>{{ $data->jmediapelayanan->jenis_mediaPelayanan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pelayanan</td>
                        <td>:</td>
                        <td>{{ $data->jenispelayanan->jenis_layanan }}</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td>{{ $data->tujuan }}</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>:</td>
                        <td>{{ $data->data }}</td>
                    </tr>
                    {{-- <tr>
                        <td>Jenis Sosial dan Kependudukan</td>
                        <td>:</td>
                        <td>{{ $data->jsospen->jenis_sosialkependudukan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Ekonomi dan Perdagangan</td>
                        <td>:</td>
                        <td>{{ $data->jekopangan->jenis_ekonomiperdagangan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pertanian dan Pertambangan</td>
                        <td>:</td>
                        <td>{{ $data->jpertama->jenis_pertanianpertambangan }}</td>
                    </tr> --}}
                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ url('admin/tamu')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection