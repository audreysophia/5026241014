<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Data Sepeda')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>
        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Sepeda</th>
                <th>Merk Sepeda</th>
                <th>Stock Sepeda</th>
                <th>Tersedia</th>
                <th>Action</th>
            </tr>
            @foreach ($sepeda as $s)
                <tr>
                    <td>{{ $s->kodesepeda }}</td>
                    <td>{{ $s->merksepeda }}</td>
                    <td>{{ $s->stocksepeda }}</td>
                    <td>{{ $s->tersedia }}</td>
                    <td>
                        <a href="/sepeda/edit/{{ $s->kodesepeda }}" class="btn btn-warning">Edit</a>

                        <a href="/sepeda/hapus/{{ $s->kodesepeda }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination" style="margin:20px 0">
            {{ $sepeda->links('pagination::bootstrap-5') }}
        </ul>
        <a href="/sepeda/tambah" class="btn btn-primary">Tambah Sepeda Baru</a>
    </center>
@endsection
