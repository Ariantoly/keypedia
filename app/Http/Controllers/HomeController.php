<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index() {
        $categories = Category::all();
        $user = User::Where('role_id', 2)->first();

        return view('home', ['categories' => $categories, 'user' => $user]);
    }
}
