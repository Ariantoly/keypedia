<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public static function showLoginPage() {
        return view('login');
    }

    public static function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if($request->remember) {
                Cookie::queue('email', $request->email, 30);
            }
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->with('error', 'Login Failed! Wrong Credentials!');
    }

    public static function logout() {
        Auth::logout();
        request()->session()->invalidate();

        return redirect()->route('login');
    }

    public static function showRegisterPage() {
        return view('register');
    }

    public static function register(Request $request) {
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
        $user->role_id = 1;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->dateOfBirth = $request->dob;

        $user->save();

        $cart = new Cart();
        $cart->user_id = $user->id;

        $cart->save();

        return redirect()->route('login');
    }

    public static function showChangePasswordPage() {
        $categories = Category::all();
        
        return view('change_password', ['categories' => $categories]);
    }

    public static function changePassword(Request $request) {
        $request->validate([
            'password' => 'required|current_password',
            'newPassword' => 'required|min:8|confirmed',
            'newPassword_confirmation' => 'required'
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->newPassword);

        $user->save();

        return static::logout();
    }
}
