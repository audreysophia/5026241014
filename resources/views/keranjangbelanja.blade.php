<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Keranjang Belanja')

@section('konten')

    <center>

        <br>

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>

            @foreach ($keranjangbelanja as $k)
                <tr>
                    <td>{{ $k->ID }}</td>
                    <td>{{ $k->KODEBARANG }}</td>
                    <td>{{ $k->JUMLAH }}</td>
                    <td>{{ $k->HARGA }}</td>

                    <td>
                        {{ $k->JUMLAH * $k->HARGA }}
                    </td>

                    <td>
				<a href="/keranjangbeli/{{ $k->KODEBARANG }}" class="btn btn-warning">Beli</a>
				|
				<a href="/keranjangbatal/{{ $k->KODEBARANG }}" class ="btn btn-danger">Batal</a>
			</td>
                </tr>
            @endforeach

        </table>

        <a href="/keranjangbelanja/tambah" class="btn btn-primary">
            + Tambah Belanja
        </a>



    </center>

@endsection
