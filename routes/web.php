<?php

use App\Http\Controllers\AdminBlogController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'page_active' => 'home',
        'title_page' => 'home'
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        'page_active' => 'dashboard',
        'title_page' => 'dashboard'
    ]);
});

Route::get('/about', function () {
    $user = User::findOrFail(1);
    return view('about', [
        'page_active' => 'about',
        'title_page' => 'about',
        'user' => $user,
        'image' => 'me.jpg'
    ]);
});

// blog
Route::get('/blogs', [BlogController::class, 'index'])->middleware('auth');
Route::get('/blog/{blog:uuid}', [BlogController::class, 'show'])->middleware('auth');
Route::get('/blogs/category/{category:uuid}', [BlogController::class, 'show_category'])->middleware('auth');
Route::get('/blogs/author/{author:uuid}', [BlogController::class, 'show_author'])->middleware('auth');

// blog admin
// Route::resource('/admin/blogs', AdminBlogController::class)->middleware('auth');
Route::controller(AdminBlogController::class)->group(function () {
    Route::get('/admin/blogs/{blog:uuid}', 'show')->middleware('auth');
    Route::get('/admin/blogs', 'index')->middleware('auth');
});

// category
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');

// auth
Route::get('/signin', [AuthController::class, 'signin'])->middleware('guest');
Route::get('/signup', [AuthController::class, 'signup'])->middleware('guest');
Route::post('/signin', [AuthController::class, 'signinPost']);
Route::post('/signup', [AuthController::class, 'signupPost']);
Route::post('/signout', [AuthController::class, 'signout'])->middleware('auth');
