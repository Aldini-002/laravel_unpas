<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs', [
            'title_page' => 'blogs',
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        // $blog = Blog::findOrFail($blog);

        return view('blog_detail', [
            'title_page' => 'blog detail',
            'blog' => $blog,
        ]);
    }
}
