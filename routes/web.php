<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

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
        'title_page' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title_page' => 'about',
        'name' => 'Aldini_002',
        'email' => '002aldini@gmail.com',
        'image' => 'me.jpg'
    ]);
});

Route::get('blogs', [BlogController::class, 'index']);
Route::get('blogs/{blog:slug}', [BlogController::class, 'show']);
