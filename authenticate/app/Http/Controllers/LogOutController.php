<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogOutController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        session()->flush();
        return redirect('/login')->with('message', 'You are logged out.');
    }
}
