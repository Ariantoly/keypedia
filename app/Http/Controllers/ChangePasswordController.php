<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index() {
        $categories = Category::all();
        
        return view('change_password', ['categories' => $categories]);
    }
}
