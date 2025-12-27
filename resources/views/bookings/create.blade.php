@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h4>Booking PlayStation</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('bookings.store') }}">
                @csrf

                <div class="mb-3">
                    <label>PlayStation</label>
                    <select name="playstation_id" id="ps" class="form-control" required>
                        <option value="">-- Pilih PlayStation --</option>
                        @foreach ($playstations as $ps)
                            <option value="{{ $ps->id }}" data-harga="{{ $ps->harga_per_jam }}">
                                {{ $ps->nama }} (Rp {{ number_format($ps->harga_per_jam) }}/jam)
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Durasi (Jam)</label>
                    <input type="number" id="durasi" name="durasi" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label>Total Harga</label>
                    <input type="text" id="total" class="form-control" readonly>
                </div>

                <button class="btn btn-success">Booking</button>
            </form>
        </div>
    </div>
</div>

<script>
const ps = document.getElementById('ps');
const durasi = document.getElementById('durasi');
const total = document.getElementById('total');

function hitung() {
    const harga = ps.options[ps.selectedIndex]?.dataset.harga || 0;
    total.value = harga * durasi.value;
}

ps.addEventListener('change', hitung);
durasi.addEventListener('input', hitung);
</script>
@endsection
