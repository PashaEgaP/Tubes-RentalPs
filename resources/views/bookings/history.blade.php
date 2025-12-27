@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h4>Riwayat Booking</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>PlayStation</th>
                        <th>Durasi</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $b)
                    <tr>
                        <td>{{ $b->playstation->nama }}</td>
                        <td>{{ $b->durasi }} jam</td>
                        <td>Rp {{ number_format($b->total_harga) }}</td>
                        <td>{{ $b->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
