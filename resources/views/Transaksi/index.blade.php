@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        Data Transaksi <br><br> <a href="{{route('transaksi.create')}}" class="btn btn-success">Tambah Data</a>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    {{-- <th scope="col">Cust_id</th> --}}
                    <th scope="col">Tanggal</th>
                    <th scope="col">Media</th>
                    <th scope="col">Pelayanan</th>
                    <th scope="col">Sarana</th>
                    <th scope="col">Kualitas Data</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $key => $item)
                <tr>
                    <th scope="row">{{$key+ 1}}</th>
                    {{-- <td>{{ $item->jpengunjung->id}}
                    <td>{{ $item->created_at }}</td> --}}
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->media }}</td>
                    <td align="center">{{ $item->pelayanan }}</td>
                    <td align="center">{{ $item->sarana }}</td>
                    <td align="center">{{ $item->kualitasdata }}</td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{route('transaksi.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('transaksi.show', $item->id)}}" class="btn btn-info">Detail</a>
                            </div>
                            <div class="col-4">
                                <form action="{{route('transaksi.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Data Transaksi ini ?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
    });
</script>
@endsection
