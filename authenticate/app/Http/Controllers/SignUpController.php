<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignUpController extends Controller
{
    public function index(){
        if (Auth::check()){
            return view('loggedin');
        }
        return view('signup');
    }

   public function create(Request $request){
    $data = request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:100',
        'password' => [
            'required',
            'string',
            'min:4',
            'regex:/[a-zA-Z]/',
            'regex:/[0-9]/',
            'regex:/[@$!%*?&]/',
        ],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    return redirect('/login')->with('success', 'Registration successful!');
   }
}
