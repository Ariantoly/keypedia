<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|email:dns|unique:App\Models\User,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required',
            'dob' => 'required|date_format:Y-m-d'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->dob = $request->dob;


        dd($request);
    }
}
