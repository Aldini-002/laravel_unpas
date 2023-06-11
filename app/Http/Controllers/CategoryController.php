<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title_page' => 'categories',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('category_detail', [
            'title_page' => 'category detail',
            'category' => $category,
            'blogs' => $category->blog
        ]);
    }
}
