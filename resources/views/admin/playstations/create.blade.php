<!DOCTYPE html>
<html>
<head>
    <title>Tambah PlayStation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Tambah PlayStation</h2>

    <form method="POST" action="{{ url('/admin/playstations') }}">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga per Jam</label>
            <input type="number" name="harga_per_jam" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ url('/admin/playstations') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
