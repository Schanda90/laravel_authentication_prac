<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()){
            return view('loggedin');
        }
        return view('login');
    }

    public function log(Request $request) {
        // Validate the incoming request data
        $data = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:4',
        ]);

        $user = User::where('email', $data['email'])->first();
    
        if ($user && Hash::check($data['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
