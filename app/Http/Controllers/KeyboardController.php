<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index() {
        return view('keyboard');
    }

    public function showUpdateForm() {
        return view('update_keyboard');
    }

    public function showAddForm() {
        return view('add_keyboard');
    }
}
