<!DOCTYPE html>
<html>
<head>
    <title>Laporan Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2>Laporan Booking Selesai</h2>

    {{-- FILTER --}}
    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-3">
            <input type="date" name="from" class="form-control"
                   value="{{ request('from') }}">
        </div>
        <div class="col-md-3">
            <input type="date" name="to" class="form-control"
                   value="{{ request('to') }}">
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary">Filter</button>
            <a href="{{ route('admin.admin.reports.bookings') }}" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    {{-- TOTAL --}}
    <div class="alert alert-success">
        <strong>Total Pendapatan:</strong>
        Rp {{ number_format($total) }}
    </div>

    {{-- TABLE --}}
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>PlayStation</th>
            <th>Durasi</th>
            <th>Total</th>
            <th>Tanggal</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($bookings as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->user->name ?? '-' }}</td>
                <td>{{ $b->playstation->nama ?? '-' }}</td>
                <td>{{ $b->durasi }} jam</td>
                <td>Rp {{ number_format($b->total_harga) }}</td>
                <td>{{ $b->created_at->format('d-m-Y') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Tidak ada data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
