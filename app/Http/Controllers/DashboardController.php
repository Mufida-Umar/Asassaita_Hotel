<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;


class DashboardController extends Controller
{
    public function dashboard() {
        $bookings = Booking::whereNull('room_id')->get();
        $checkedIn = Booking::where('status', 'active')->get();
            $assignedRoomIds = Booking::where('status', 'active')->pluck('room_id')->toArray();
            $availableRooms = Room::where('status', 'available')
            ->whereNotIn('id', $assignedRoomIds)
            ->get();
    
        return view('admin.admin_dashboard', compact('bookings', 'checkedIn', 'availableRooms'));
    }
    
    public function bookings() {
        $bookings = Booking::whereNull('room_id')->get();
        $checkedIn = Booking::where('status', 'active')->get();
    
        $assignedRoomIds = Booking::where('status', 'active')->pluck('room_id')->toArray();
        $availableRooms = Room::where('status', 'available')
            ->whereNotIn('id', $assignedRoomIds)
            ->get();
    
        return view('admin.components.bookings', compact('bookings', 'checkedIn', 'availableRooms'));
    }
    public function message() {
        return view('admin.components.message');
    }
    public function profile() {
        return view('admin.components.profile');
    }
    public function rooms() {
        return view('admin.components.rooms');
    }
    public function setting() {
        return view('admin.components.setting');
    }
}
