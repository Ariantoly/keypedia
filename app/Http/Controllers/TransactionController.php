<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('transaction', ['categories' => $categories]);
    }

    public function getTransaction() {
        $categories = Category::all();

        return view('transaction_detail', ['categories' => $categories]);
    }
}
