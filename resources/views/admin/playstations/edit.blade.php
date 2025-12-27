<!DOCTYPE html>
<html>
<head>
    <title>Edit PlayStation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Edit PlayStation</h2>

    <form method="POST" action="{{ route('admin.playstations.update',$playstation->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $playstation->nama }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga per Jam</label>
            <input type="number" name="harga_per_jam" value="{{ $playstation->harga_per_jam }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="tersedia" {{ $playstation->status=='tersedia'?'selected':'' }}>Tersedia</option>
                <option value="disewa" {{ $playstation->status=='disewa'?'selected':'' }}>Disewa</option>
            </select>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.playstations.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
