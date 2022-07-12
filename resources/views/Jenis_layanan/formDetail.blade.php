@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Layanan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Layanan</td>
                        <td>:</td>
                        <td>{{ $jenisLayanan->jenis_layanan }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('jLayanan.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection