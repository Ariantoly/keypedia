<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public static function index() {
        $categories = Category::all();
        $cart = Cart::find(Auth::user()->cart->id);
        
        return view('cart', ['categories' => $categories, 'cart' => $cart]);
    }

    public static function addCart(Request $request, $id) {
        $request->validate([
            'qty' => 'required|integer|min:1'
        ]);

        $cart = Cart::find(Auth::user()->cart->id);
        $cartDetail = $cart->cartDetails->where('keyboard_id', $id)->first();
        if($cartDetail == null) {
            $cartDetail = new CartDetail();

            $cartDetail->cart_id = $cart->id;
            $cartDetail->keyboard_id = $id;
            $cartDetail->quantity = $request->qty;
        }
        else {
            $cartDetail->quantity += $request->qty;
        }

        $name = $cartDetail->keyboard->name;

        $cartDetail->save();
        
        return redirect()->back()->with('message', $name.' has been added to cart');
    }

    public static function updateCart(Request $request, $cartId, $keyboardId) {
        $request->validate([
            'qty'.$keyboardId => 'required|integer|min:0'
        ]);

        $qty = $request->input('qty'.$keyboardId);

        if($qty == 0) {
            return static::deleteCart($cartId, $keyboardId);
        }
        else {
            $cartDetail = CartDetail::where('cart_id', $cartId)->where('keyboard_id', $keyboardId)->first();
            $cartDetail->quantity = $qty;
            $cartDetail->save();
        }

        return redirect()->back();
    }

    public static function deleteCart($cartId, $keyboardId) {
        $cartDetail = CartDetail::Where('cart_id', $cartId)->where('keyboard_id', $keyboardId)->first();
        $cartDetail->delete();

        return redirect()->route('cart');
    }

    public static function deleteAll() {
        $cart = Cart::find(Auth::user()->cart->id);
        foreach($cart->cartDetails as $c) {
            $c->delete();
        }
    }

    public static function checkout() {
        date_default_timezone_set('Asia/Jakarta');
        $transaction = new TransactionHeader();
        $transaction->user_id = Auth::user()->id;
        $transaction->date = date("Y-m-d H:i:s");

        $transaction->save();

        $cart = Cart::find(Auth::user()->cart->id);
        foreach($cart->cartDetails as $c) {
            $transactionDetail = new TransactionDetail();
            $transactionDetail->transaction_id = $transaction->id;
            $transactionDetail->keyboard_id = $c->keyboard_id;
            $transactionDetail->quantity = $c->quantity;
            $transactionDetail->save();
        }

        static::deleteAll();

        return redirect()->back()->with("message", "Checkout completed");

    }
}
