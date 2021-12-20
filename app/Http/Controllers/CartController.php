<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
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

        $cartDetail->save();
        
        return redirect()->back()->with('message', $cartDetail->keyboard->name.' has been added to cart');
    }

    public static function updateCart(Request $request, $cartId, $keyboardId) {
        $request->validate([
            'qty' => 'required|integer|min:0'
        ]);

        if($request->qty == 0) {
            return static::deleteCart($cartId, $keyboardId);
        }
        else {
            $cartDetail = CartDetail::Where('cart_id', $cartId)->where('keyboard_id', $keyboardId)->first();
            $cartDetail->quantity = $request->qty;
            $cartDetail->save();
        }

        return redirect()->back();
    }

    public static function deleteCart($cartId, $keyboardId) {
        $cartDetail = CartDetail::Where('cart_id', $cartId)->where('keyboard_id', $keyboardId)->first();
        $cartDetail->delete();

        return redirect()->route('cart');
    }

    public static function checkout() {

    }
}
