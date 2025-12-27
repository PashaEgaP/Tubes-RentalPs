<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2 class="mb-4">📊 Dashboard Admin</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5>Total Booking</h5>
                    <h3>{{ $totalBooking }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5>Pending</h5>
                    <h3>{{ $pending }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5>Approved</h5>
                    <h3>{{ $approved }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5>Selesai</h5>
                    <h3>{{ $finished }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h4>Total Pendapatan</h4>
            <h2 class="text-success">
                Rp {{ number_format($totalPendapatan) }}
            </h2>
        </div>
    </div>

    <div class="mt-4">
        <a href="/admin/bookings" class="btn btn-primary">Kelola Booking</a>
        <a href="/admin/playstations" class="btn btn-secondary">Kelola PlayStation</a>
        <a href="/admin/reports/bookings" class="btn btn-success">Laporan</a>
    </div>
</div>

</body>
</html>
