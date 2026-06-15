<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Kode Soal nilai_peserta')

@section('konten')

    <center>

        <br>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>

            @foreach ($nilai_peserta as $a)
                <tr>
                    <td>{{ $a->ID }}</td>
                    <td>{{ $a->nopeserta }}</td>
                    <td>{{ $a->nilaiteori }}</td>
                    <td>{{ $a->nilaipraktek }}</td>
                    <td>
                        {{ ($a->nilaiteori + $a->nilaipraktek) / 2 }}
                    </td>
                    <td>
                        @if (($a->nilaiteori + $a->nilaipraktek) / 2 >= 75)
                            <a href="#" class ="btn btn-success">LULUS</a>
                        @elseif(($a->nilaiteori + $a->nilaipraktek) / 2 < 75)
                            <a href="#" class ="btn btn-danger">GAGAL</a>
                        @endif
                    </td>

                </tr>
            @endforeach

        </table>

        <a href="/eas/tambah" class="btn btn-primary">
            + Tambah Data
        </a>



    </center>

@endsection
