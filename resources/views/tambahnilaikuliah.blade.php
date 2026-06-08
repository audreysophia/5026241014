@extends('template')

@section('title', 'Tambah Nilai Mahasiswa')

@section('konten')

<br>
<br>

<div class="card">
    <div class="card-header">
        Form Tambah Nilai Mahasiswa
    </div>

    <div class="card-body">
        <form action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="text" name="nrp" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-10">
                    <input type="number" name="nilaiangka" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <input type="number" name="sks" class="form-control" required>
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

<a href="/nilaikuliah" class="btn btn-info">Kembali</a>

@endsection
