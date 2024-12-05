<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.guest-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/home'); // Ganti dengan route yang sesuai
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
