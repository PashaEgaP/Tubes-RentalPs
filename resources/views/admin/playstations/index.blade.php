<!DOCTYPE html>
<html>
<head>
    <title>Data PlayStation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Data PlayStation</h2>

    <a href="/admin/playstations/create" class="btn btn-primary mb-3">
        + Tambah PlayStation
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga / Jam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach($playstations as $ps)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ps->nama }}</td>
            <td>Rp {{ number_format($ps->harga_per_jam) }}</td>
            <td>
                <span class="badge bg-{{ $ps->status=='tersedia'?'success':'danger' }}">
                    {{ $ps->status }}
                </span>
            </td>
            <td>
            <a href="{{ url('/admin/playstations/'.$ps->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

               <form action="{{ url('/admin/playstations/'.$ps->id) }}"
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus data?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
