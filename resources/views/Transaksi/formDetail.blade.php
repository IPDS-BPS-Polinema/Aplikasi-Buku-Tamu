@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i>Detail Data Transaksi</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Media</td>
                        <td>:</td>
                        <td>{{ $transaksi->media }}</td>
                    </tr>
                    <tr>
                        <td>Pelayanan</td>
                        <td>:</td>
                        <td>{{ $transaksi->pelayanan }}</td>
                    </tr>
                    <tr>
                        <td>Sarana</td>
                        <td>:</td>
                        <td>{{ $transaksi->sarana }}</td>
                    </tr>
                    <tr>
                        <td>Kualitas Data</td>
                        <td>:</td>
                        <td>{{ $transaksi->kualitasdata }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ route('transaksi.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
