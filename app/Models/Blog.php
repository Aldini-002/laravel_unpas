<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Blog extends Model
// {
//     use HasFactory;


// }

class Blog
{
    private static
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

    public static function all()
    {
        return collect(self::$blogs);
    }

    public static function find($slug)
    {
        $blogs = static::all();

        return $blogs->firstWhere('slug', $slug);
    }
}
