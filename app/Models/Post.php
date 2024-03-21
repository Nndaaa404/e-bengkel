<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ananda Rizky Maulana",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque excepturi deleniti distinctio, iusto repellendus ad repellat corporis soluta quasi. Temporibus totam quo aliquid. Voluptates expedita aut, exercitationem molestiae a itaque suscipit veritatis? Dolore eligendi nesciunt quibusdam corrupti veniam, illo pariatur temporibus ullam earum ipsa nisi nulla enim eveniet illum odio quis. Enim tempore minus dolorum, repellendus corporis officia adipisci earum dicta et excepturi porro accusamus ratione! Magnam doloremque minima vel, aut delectus ab repellendus ducimus quis nisi magni dolore! Debitis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nndaaa 404",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa assumenda quo, doloribus voluptatum fugit quasi? Necessitatibus esse aliquam eum, ut inventore, eveniet nulla molestiae dignissimos itaque fugiat at tempora praesentium rem sequi ex assumenda sapiente mollitia illum dolores, doloribus doloremque vero iste. Id mollitia rerum voluptates quis, nostrum reprehenderit veritatis laudantium, quia saepe molestias nulla tempora obcaecati, sint error architecto exercitationem quam deserunt. Dolor quos delectus officia magnam temporibus at facere. Quae fuga quasi sit quod, ipsam aliquid aut impedit aliquam dicta tempore eligendi! Quis quod, maiores nihil ducimus ipsam itaque doloremque? Incidunt, consectetur ut numquam repellat minus beatae accusantium."
        ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts =  static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }


}
