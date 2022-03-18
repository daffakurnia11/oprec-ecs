<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('members.register', [
            'title' => 'Register Akun'
        ]);
    }

    public function registration(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|email:dns|max:255|unique:users',
            'password'  => 'required|same:repeat',
            'repeat'    => 'required'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect('/')->with('message', 'Register success');
    }

    public function signin()
    {
        return view('members.signin', [
            'title' => 'Sign In'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email:dns',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Member Validation
            // if (auth()->user()->role == 'Member') {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
            // }

            // Admin Validation
            // if (auth()->user()->role == 'Dev') {
            //     $request->session()->regenerate();

            //     return redirect()->intended('/dashboard');
            // }

            // Admin Validation
            // if (auth()->user()->role == 'Admin') {
            //     $request->session()->regenerate();

            //     return redirect()->intended('/dashboard');
            // }

            // Admin Requesting Validation
            // if (auth()->user()->role == 'Requesting') {
            //     $request->session()->invalidate();

            //     return redirect('/login')->with('loginError', 'You have been requested! Please contact Developer!');
            // }
        }

        return back()->with('message', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout success');
    }
}
