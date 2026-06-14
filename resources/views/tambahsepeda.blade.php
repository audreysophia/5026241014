@extends('template')

@section('title', 'Tambah Sepeda')

@section('konten')

    <br>
    <br>

    <div class="card">
        <div class="card-header">
            Form Tambah Sepeda
        </div>

        <div class="card-body">
            <form action="/sepeda/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Merk Sepeda</label>
                    <div class="col-sm-10">
                        <input type="text" name="merksepeda" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Stock Sepeda</label>
                    <div class="col-sm-10">
                        <input type="number" name="stocksepeda" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input type="number" name="tersedia" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>

            <br>

            <a href="/sepeda" class="btn btn-info">Kembali</a>
        </div>
    </div>
@endsection
