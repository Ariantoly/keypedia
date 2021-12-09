<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('keyboard', ['categories' => $categories]);
    }

    public function showUpdateForm() {
        $categories = Category::all();

        return view('update_keyboard', ['categories' => $categories]);
    }

    public function showAddForm() {
        $categories = Category::all();

        return view('add_keyboard', ['categories' => $categories]);
    }

    public function add(Request $request) {
        $request->validate([
            'category' => 'required|different:nullable',
            'name' => 'required|min:5',
            'price' => 'integer|min:1',
            'description' => 'required|min:20',
            'image' => 'nullable'
        ]);

        $keyboard = new Keyboard();
        $keyboard->category_id = intval($request->category);
        $keyboard->name = $request->name;
        $keyboard->price = $request->price;
        $keyboard->description = $request->description;
        $keyboard->image = $request->image;

        dd($keyboard);
    }
}
