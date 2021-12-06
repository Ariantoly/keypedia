<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category');
    }

    public function manage() {
        return view('manage_category');
    }

    public function showUpdateForm() {
        return view('update_category');
    }
}
