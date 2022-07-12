@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Sosial dan Kependudukan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Sosial dan Kependudukan</td>
                        <td>:</td>
                        <td>{{ $jenisSospen->jenis_sosialkependudukan }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ route('Sospen.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection