<?php
// Laporan booking dan pendapatan
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function bookings(Request $request)
    {
        $query = Booking::with(['user','playstation'])
            ->where('status', 'finished');

        // FILTER TANGGAL
        if ($request->filled('from') && $request->filled('to')) {
            $query->whereBetween('created_at', [
                $request->from,
                $request->to
            ]);
        }

        $bookings = $query->get();

        $total = $bookings->sum('total_harga');

        return view('admin.reports.bookings', compact('bookings','total'));
    }
}
