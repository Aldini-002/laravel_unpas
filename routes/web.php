<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/blogs', function () {
    $blogs = [
        [
            'title' => 'Backend Dev.',
            'slug' => 'backend-dev',
            'author' => 'Naruto shipudd',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores magni voluptate harum quidem iusto minima reprehenderit cumque cupiditate animi, nemo fugit velit, voluptatibus pariatur odio praesentium debitis veniam itaque, consequatur inventore? Quo, provident fugiat porro eius odit optio obcaecati fuga magni possimus esse est iste ea voluptatibus tempore labore quia cumque aperiam minima deserunt. Magni, dicta saepe! Amet voluptate, dolorem assumenda modi a nisi officia. Voluptas nesciunt quaerat obcaecati. Quasi dolore possimus ab non nemo veniam explicabo odio ut! Laudantium earum iusto molestias pariatur placeat temporibus laborum eaque eos impedit delectus! Molestiae rerum reiciendis soluta. Sapiente velit neque soluta nam?'
        ],
        [
            'title' => 'Frontend Dev.',
            'slug' => 'frontend-dev',
            'author' => 'Bocchi luci',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores magni voluptate harum quidem iusto minima reprehenderit cumque cupiditate animi, nemo fugit velit, voluptatibus pariatur odio praesentium debitis veniam itaque, consequatur inventore? Quo, provident fugiat porro eius odit optio obcaecati fuga magni possimus esse est iste ea voluptatibus tempore labore quia cumque aperiam minima deserunt. Magni, dicta saepe! Amet voluptate, dolorem assumenda modi a nisi officia. Voluptas nesciunt quaerat obcaecati. Quasi dolore possimus ab non nemo veniam explicabo odio ut! Laudantium earum iusto molestias pariatur placeat temporibus laborum eaque eos impedit delectus! Molestiae rerum reiciendis soluta. Sapiente velit neque soluta nam?'
        ],
    ];

    return view('blogs', [
        'title_page' => 'blogs',
        'blogs' => $blogs
    ]);
});

Route::get('/blogs/{slug}', function ($slug) {
    $blogs = [
        [
            'title' => 'Backend Dev.',
            'slug' => 'backend-dev',
            'author' => 'Naruto shipudd',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores magni voluptate harum quidem iusto minima reprehenderit cumque cupiditate animi, nemo fugit velit, voluptatibus pariatur odio praesentium debitis veniam itaque, consequatur inventore? Quo, provident fugiat porro eius odit optio obcaecati fuga magni possimus esse est iste ea voluptatibus tempore labore quia cumque aperiam minima deserunt. Magni, dicta saepe! Amet voluptate, dolorem assumenda modi a nisi officia. Voluptas nesciunt quaerat obcaecati. Quasi dolore possimus ab non nemo veniam explicabo odio ut! Laudantium earum iusto molestias pariatur placeat temporibus laborum eaque eos impedit delectus! Molestiae rerum reiciendis soluta. Sapiente velit neque soluta nam?'
        ],
        [
            'title' => 'Frontend Dev.',
            'slug' => 'frontend-dev',
            'author' => 'Bocchi luci',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores magni voluptate harum quidem iusto minima reprehenderit cumque cupiditate animi, nemo fugit velit, voluptatibus pariatur odio praesentium debitis veniam itaque, consequatur inventore? Quo, provident fugiat porro eius odit optio obcaecati fuga magni possimus esse est iste ea voluptatibus tempore labore quia cumque aperiam minima deserunt. Magni, dicta saepe! Amet voluptate, dolorem assumenda modi a nisi officia. Voluptas nesciunt quaerat obcaecati. Quasi dolore possimus ab non nemo veniam explicabo odio ut! Laudantium earum iusto molestias pariatur placeat temporibus laborum eaque eos impedit delectus! Molestiae rerum reiciendis soluta. Sapiente velit neque soluta nam?'
        ],
    ];

    $blog_detail = [];
    foreach ($blogs as $blog) {
        if ($blog['slug'] === $slug) {
            $blog_detail = $blog;
        }
    }

    return view('blog_detail', [
        'title_page' => 'blog detail',
        'blog' => $blog_detail,
    ]);
});
