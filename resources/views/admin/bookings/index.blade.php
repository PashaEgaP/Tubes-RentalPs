@extends('layouts.app')

@section('content')
<h3>Data Booking</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>User</th>
        <th>Playstation</th>
        <th>Durasi</th>
        <th>Total</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach ($bookings as $b)
    <tr>
        <td>{{ $b->user->name }}</td>
        <td>{{ $b->playstation->nama }}</td>
        <td>{{ $b->durasi }} jam</td>
        <td>Rp {{ number_format($b->total_harga) }}</td>
        <td>{{ $b->status }}</td>
        <td>
            @if ($b->status === 'pending')
                <form action="{{ url('/admin/bookings/'.$b->id.'/approve') }}" method="POST">
                    @csrf
                    <button>Approve</button>
                </form>
            @elseif ($b->status === 'approved')
                <form action="{{ url('/admin/bookings/'.$b->id.'/finish') }}" method="POST">
                    @csrf
                    <button>Selesai</button>
                </form>
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
