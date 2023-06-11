<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['author', 'category'])->latest()->get();

        return view('blogs', [
            'title_page' => 'Blogs',
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

    public function show_category(Category $category)
    {
        return view('blogs', [
            'title_page' => "Blogs by category : $category->name",
            'category' => $category,
            'blogs' => $category->blog->load('category', 'author'),
        ]);
    }

    public function show_author(User $author)
    {
        return view('blogs', [
            'title_page' => "Blogs by author : $author->name",
            'blogs' => $author->blog->load('category', 'author'),
        ]);
    }
}
