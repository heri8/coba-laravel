<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Heri Setiawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum sit, delectus itaque quae praesentium tenetur iure temporibus quibusdam! Nisi odio sed sapiente est tempora quasi, praesentium commodi eum, excepturi nulla quidem. Voluptatum hic enim, in voluptas libero quod beatae iusto itaque eius sint voluptates nulla possimus quibusdam, iste ipsa! Rerum accusantium quam numquam fuga optio nulla recusandae, quibusdam reprehenderit asperiores praesentium minima eveniet excepturi minus vel totam! Aspernatur cumque veritatis dolores maxime aperiam repellendus modi, tenetur saepe, iusto unde dolor?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Harby Anwardi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla cum optio architecto et facilis corrupti commodi nihil aliquid labore minima! Quae a ut doloremque perferendis ducimus, amet est debitis vel at, commodi magnam nisi nam minima sequi deleniti, perspiciatis distinctio id quaerat error. Itaque quam rerum enim est dolore nulla quia eum iusto tempore eligendi dolores cumque asperiores possimus illo consequatur, provident consequuntur corporis nemo animi tenetur ut inventore. Autem eius expedita ipsum ratione unde illo porro, rem aliquam vitae quis consectetur fugit ab libero. Iste placeat itaque quod, eos accusamus vero, sit voluptates quas, quaerat nemo illum numquam reiciendis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
