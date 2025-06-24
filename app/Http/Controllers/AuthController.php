<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login (Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email', 'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)){
            Auth::login($user);
            return redirect('/admin_dashboard');
        }
        
        return back()->withErrors(['email' => 'invalid credentials']);
        
    }

    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
   
}
