<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index($id) {
        $categories = Category::all();
        $category = Category::find($id);
        
        return view('category', ['categories' => $categories, 'category' => $category]);
    }

    public function manage() {
        $categories = Category::all();

        return view('manage_category', ['categories' => $categories]);
    }

    public function showUpdateForm($id) {
        $categories = Category::all();
        $category = Category::find($id);

        return view('update_category', ['categories' => $categories, 'category' => $category]);
    }

    public function update(Request $request, $id) {
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

        return redirect('manageCategory');
    }

    public function delete($id) {
        $category = Category::find($id);

        // Storage::delete('public/'.$category->image);

        // $category->delete();

        // return redirect()->back();
    }
}
