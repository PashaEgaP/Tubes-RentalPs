<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Playstation;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        $playstations = Playstation::where('status', true)->get();
        
        return view('bookings.create', compact('playstations'));
    }
    // LIST BOOKING
    public function index()
    {
        $bookings = Booking::with(['user', 'playstation'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.bookings.index', compact('bookings'));
    }

    // APPROVE
    public function approve(Booking $booking)
    {
        $booking->update(['status' => 'approved']);

        return back()->with('success', 'Booking disetujui');
    }

    // SELESAI
    public function finish(Booking $booking)
    {
        $booking->update(['status' => 'finished']);

        return back()->with('success', 'Booking selesai');
    }

    // LAPORAN
    public function report()
    {
        $total = Booking::where('status', 'finished')->sum('total_harga');
        $bookings = Booking::where('status', 'finished')->get();

        return view('admin.reports.index', compact('total', 'bookings'));
    }
}
