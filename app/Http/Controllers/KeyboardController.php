<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeyboardController extends Controller
{
    public static function index($id) {
        $categories = Category::all();
        $keyboard = Keyboard::find($id);

        return view('keyboard', ['categories' => $categories, 'keyboard' => $keyboard]);
    }

    public static function showUpdatePage($id) {
        $categories = Category::all();
        $keyboard = Keyboard::find($id);

        return view('update_keyboard', ['categories' => $categories, 'keyboard' => $keyboard]);
    }

    public static function showAddPage() {
        $categories = Category::all();

        return view('add_keyboard', ['categories' => $categories]);
    }

    public static function add(Request $request) {
        $request->validate([
            'category' => 'required|different:nullable',
            'name' => 'required|min:5|unique:App\Models\Keyboard,name',
            'price' => 'required|integer|min:1',
            'description' => 'required|min:20',
            'image' => 'required|image'
        ]);

        $file = $request->file('image');
        $imageName = time().'_'.$file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $imageName);
        $imagePath = 'images/'.$imageName;

        $keyboard = new Keyboard();
        $keyboard->category_id = intval($request->category);
        $keyboard->name = $request->name;
        $keyboard->price = $request->price;
        $keyboard->description = $request->description;
        $keyboard->image = $imagePath;

        $keyboard->save();

        return redirect()->back();
    }

    public static function update(Request $request, $id) {
        $request->validate([
            'category' => 'required|different:nullable',
            'name' => 'required|min:5',
            'price' => 'required|integer|min:1',
            'description' => 'required|min:20',
            'image' => 'nullable|image'
        ]);

        $keyboard = Keyboard::find($id);
        $keyboard->category_id = intval($request->category);
        $keyboard->name = $request->name;
        $keyboard->price = $request->price;
        $keyboard->description = $request->description;

        $file = $request->file('image');
        if($file != null) {
            Storage::delete('public/'.$keyboard->image);
            $imageName = time().'_'.$file->getClientOriginalName();
            Storage::putFileAs('public/images', $file, $imageName);
            $imagePath = 'images/'.$imageName;

            $keyboard->image = $imagePath;
        }

        $keyboard->save();

        return redirect()->route('category');
    }

    public static function delete($id) {
        $keyboard = Keyboard::find($id);

        // Storage::delete('public/'.$keyboard->image);

        // $keyboard->delete();

        // return redirect()->back();
    }
}
