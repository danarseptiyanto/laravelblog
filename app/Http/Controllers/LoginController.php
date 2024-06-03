<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin');
        }
        return back()->with('status', 'Kombinasi email dan password salah!');
    }
}
