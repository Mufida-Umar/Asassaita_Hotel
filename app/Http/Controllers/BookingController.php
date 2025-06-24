<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with('success', 'Booking Successful');
    }

    public function index()
    {
        $bookings = \App\Models\Booking::all(); 
        return view('admin.components.bookings', compact('bookings')); 
    }
}