<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rental PlayStation</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">🎮 Rental PS</a>

        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav me-auto">

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/bookings/create">Booking</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/bookings/history">Riwayat</a>
                    </li>

                    @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/dashboard">Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/bookings">Kelola Booking</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/reports">Laporan</a>
                        </li>
                    @endif
                @endauth
            </ul>

            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-sm btn-outline-light">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
