@extends('template')

@section('title', 'Kode Soal nilai_peserta')

@section('konten')

<br>
<br>

<div class="card">
    <div class="card-header">
        Form Tambah Nilai Peserta
    </div>

    <div class="card-body">
        <form action="/eas/store" method="post">
            {{ csrf_field() }}

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">No Peserta</label>
                <div class="col-sm-10">
                    <input type="text" name="nopeserta" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nilai Teori</label>
                <div class="col-sm-10">
                    <input type="text" name="nilaiteori" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nilai Praktek</label>
                <div class="col-sm-10">
                    <input type="text" name="nilaipraktek" class="form-control" required>
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

<a href="/eas" class="btn btn-info">Kembali</a>

@endsection
