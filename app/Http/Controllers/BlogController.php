<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('blogs', [
            'title_page' => 'blogs',
            'blogs' => $blogs
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog_detail', [
            'title_page' => 'blog detail',
            'blog' => $blog,
        ]);
    }

    public function show_author(User $author)
    {
        return view('blogs_author', [
            'title_page' => 'blogs author',
            'blogs' => $author->blog,
            'user' => $author
        ]);
    }
}
