<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public static function index() {
        $categories = Category::all();
        $transactions = TransactionHeader::where('user_id', Auth::user()->id)->get();

        return view('transaction', ['categories' => $categories, 'transactions' => $transactions]);
    }

    public static function getTransaction($id) {
        $categories = Category::all();
        $transactions = TransactionDetail::where('transaction_id', $id)->get();

        return view('transaction_detail', ['categories' => $categories, 'transactions' => $transactions]);
    }
}
