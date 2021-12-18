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
        $cartDetail = new CartDetail();

        $cartDetail->cart_id = $cart->id;
        $cartDetail->keyboard_id = $id;
        $cartDetail->quantity = $request->qty;

        $cartDetail->save();

        return redirect()->back();
    }

    public static function updateCart(Request $request, $id) {
        $request->validate([
            'qty' => 'required|integer|min:0'
        ]);

        if($request->qty == 0) {
            return redirect()->route('deleteCart');
        }
        else {
            $cartDetail = CartDetail::Where('cart_id', $id)->first();
            $cartDetail->quantity = $request->qty;
            $cartDetail->save();
        }

        return redirect()->back();
    }

    public static function deleteCart($id) {
        $cartDetail = CartDetail::Where('cart_id', $id)->first();
        $cartDetail->delete();

        return redirect()->route('cart');
    }

    public static function checkout() {

    }
}
