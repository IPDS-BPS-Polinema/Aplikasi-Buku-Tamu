@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Ekonomi dan Perdagangan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Ekonomi dan Perdagangan</td>
                        <td>:</td>
                        <td>{{ $jenisEkopangan->jenis_ekonomiperdagangan }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ route('Ekopangan.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection