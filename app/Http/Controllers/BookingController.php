<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room; 

class BookingController extends Controller
{
    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back()->with('success', 'Booking Successful');
    }

    public function index()
    {
        $bookings = Booking::whereNull('room_id')->get();
        $checkedIn = Booking::where('status', 'active')->get();
        $assignedRoomIds = Booking::where('status', 'active')->pluck('room_id')->toArray();
        $availableRooms = Room::where('status', 'available')
        ->whereNotIn('id', $assignedRoomIds)
        ->get();
        return view('admin.components.bookings', compact('bookings', 'checkedIn', 'availableRooms'));
    
    }

    public function assignRoom(Request $request, Booking $booking)
    {
        $booking->room_id = $request->room_id;
        $booking->status = 'active';
        $booking->save();
        return redirect()->back()->with('success', 'Room assigned!');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()->with('success', 'Booking deleted!');
    }

    public function checkout(Booking $booking)
    {
        $booking->status = 'checked_out';
        $booking->save();
        return redirect()->back()->with('success', 'Checked out!');
    }

    public function update(Request $request, Booking $booking)
{
    $booking->update($request->only(['fullName', 'checkIn', 'checkOut', 'roomType', 'guest']));
    return redirect()->back()->with('success', 'Booking updated!');
}
}