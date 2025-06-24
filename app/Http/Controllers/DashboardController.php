<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.admin_dashboard');
    }
    public function bookings() {
        return view('admin.components.bookings');
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
