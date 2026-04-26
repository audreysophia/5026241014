<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel - Biodata</title>
</head>
<body>
    <h1>Tutorial Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <p>Nama: {{ $nama }}</p>

    <p>Pelajaran:</p>
    <ul>
        @foreach($pelajaran as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <p>IP Address kamu: {{ $ip }}</p>
</body>
</html>
