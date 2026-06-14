@extends('template')

@section('title', 'Tambah Keranjang Belanja')

@section('konten')

<br>
<br>

<div class="card">
    <div class="card-header">
        Form Tambah Keranjang Belanja
    </div>

    <div class="card-body">
        <form action="/keranjangbelanja/store" method="post">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="text" name="kodebarang" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" name="harga" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>

        </form>
    </div>
</div>

<br>

<a href="/keranjangbelanja" class="btn btn-info">Kembali</a>

@endsection
