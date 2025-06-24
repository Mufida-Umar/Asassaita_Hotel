<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function home(){
        return view('layout.home');
    }
    public function contact(){
        return view('layout.contact');
    }
    public function about(){
        return view('layout.about');
    }
    public function update(){
        return view('layout.update');
    }
    public function booking(){
        return view('layout.booking');
    }
}
