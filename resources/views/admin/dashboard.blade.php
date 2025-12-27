<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h1 class="text-success">ADMIN DASHBOARD</h1>
            <p>Login sebagai: <b>{{ auth()->user()->name }}</b></p>
            <p>Role: <b>{{ auth()->user()->role }}</b></p>

            <a href="/" class="btn btn-primary">Home</a>
            <a href="/logout" class="btn btn-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
    </div>
</div>

</body>
</html>
