<!DOCTYPE html>
<html>
<head>
    <title>Edit Sepeda</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="mb-4">
        <h2>
            <a href="https://www.malasngoding.com" class="text-decoration-none">
                www.malasngoding.com
            </a>
        </h2>
        <h3>Edit Sepeda</h3>
    </div>

    <a href="/sepeda" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($sepeda as $s)

    <div class="card">
        <div class="card-header">
            Form Edit Data Sepeda
        </div>

        <div class="card-body">
            <form action="/sepeda/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="kodesepeda" value="{{ $s->kodesepeda }}">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Merk Sepeda</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merksepeda"
                            class="form-control"
                            required
                            value="{{ $s->merksepeda }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Stock Sepeda</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stocksepeda"
                            class="form-control"
                            required
                            value="{{ $s->stocksepeda }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" class="form-control">
                            <option value="Y" {{ $s->tersedia == 'Y' ? 'selected' : '' }}>
                                Y
                            </option>
                            <option value="N" {{ $s->tersedia == 'N' ? 'selected' : '' }}>
                                N
                            </option>
                        </select>
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

    @endforeach

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
