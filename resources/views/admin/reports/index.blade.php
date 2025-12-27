@extends('layouts.app')

@section('content')
<h3>Laporan Pendapatan</h3>

<p><b>Total Pendapatan:</b> Rp {{ number_format($total) }}</p>

<table border="1" cellpadding="10">
    <tr>
        <th>User</th>
        <th>PS</th>
        <th>Total</th>
    </tr>

    @foreach ($bookings as $b)
    <tr>
        <td>{{ $b->user->name }}</td>
        <td>{{ $b->playstation->nama }}</td>
        <td>Rp {{ number_format($b->total_harga) }}</td>
    </tr>
    @endforeach
</table>
@endsection
