<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public static function index($id) {
        $categories = Category::all();
        $category = Category::find($id);
        $keyboards = $category->keyboards()->paginate(8);
        
        return view('category', ['categories' => $categories, 'category' => $category, 'keyboards' => $keyboards]);
    }

    public static function search(Request $request, $id) {
        $categories = Category::all();
        $category = Category::find($id);

        $search = $request->search;
        
        if(strcmp($request->type, 'name') == 0) {
            $keyboards = $category->keyboards()->where('name', 'like', "%$search%")->paginate(8)->withQueryString();
        }
        else {
            $keyboards = $category->keyboards()->where('price', intval($request->search))->paginate(8)->withQueryString();
        }

        return view('category', ['categories' => $categories, 'category' => $category, 'keyboards' => $keyboards]);
    }

    public static function manage() {
        $categories = Category::all();

        return view('manage_category', ['categories' => $categories]);
    }

    public static function showUpdatePage($id) {
        $categories = Category::all();
        $category = Category::find($id);

        return view('update_category', ['categories' => $categories, 'category' => $category]);
    }

    public static function update(Request $request, $id) {
        $request->validate([
            'name' => ['required', 'min:5', Rule::unique('categories')->ignore($id)],
            'image' => 'nullable|image'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;

        $file = $request->file('image');
        if($file != null) {
            Storage::delete('public/'.$category->image);
            $imageName = time().'_'.$file->getClientOriginalName();
            Storage::putFileAs('public/images', $file, $imageName);
            $imagePath = 'images/'.$imageName;

            $category->image = $imagePath;
        }

        $category->save();

        return redirect()->route('manage')->with('message', $category->name.' has been updated');
    }

    public static function delete($id) {
        $category = Category::find($id);

        // Storage::delete('public/'.$category->image);

        // $category->delete();

        // return redirect()->back();
    }
}
