<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{


public function index()
{
    $rooms = Room::all();
    $assignedRoomIds = \App\Models\Booking::where('status', 'active')->pluck('room_id')->toArray();
    return view('admin.components.rooms', compact('rooms', 'assignedRoomIds'));
}

public function store(Request $request)
{
    Room::create($request->only(['name', 'type', 'status']));
    return redirect()->back()->with('success', 'Room added!');
}
}
