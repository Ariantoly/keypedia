<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;

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

    public function showUpdateForm() {
        $categories = Category::all();

        return view('update_category', ['categories' => $categories]);
    }
}
