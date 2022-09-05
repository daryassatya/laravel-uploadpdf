<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            'title' => "Post Pertama",
            'slug' => "post-pertama",
            'author' => "Dimas Aryasatya",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Unde maiores dignissimos possimus error ad, quam dolor sit totam similique ipsum tempore magnam enim repellendus ut dolorum a autem quod? Ex.",
        ],
        [
            'title' => "Post Kedua",
            'slug' => "post-kedua",
            'author' => "Dimas Aryasatya",
            'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor placeat atque accusamus delectus? Obcaecati dolorem molestias pariatur voluptas ea dolore libero qui soluta necessitatibus? Assumenda, aspernatur? Repellendus ad sit totam voluptatem, fuga deserunt veniam saepe optio quia. Adipisci doloremque voluptatibus temporibus. Saepe tenetur ex aspernatur minus ea asperiores. Ex nemo, eaque perferendis repellat beatae excepturi consequuntur ea dignissimos illo nesciunt vitae incidunt voluptates aliquid culpa neque corporis omnis facilis pariatur dolores similique totam aperiam laudantium. Voluptates est incidunt perferendis maiores ullam praesentium eveniet ipsum deleniti cupiditate doloribus, mollitia itaque molestiae magnam, odit et. Accusantium, ex? Fugit quaerat repellendus numquam repellat.",
        ],
    ];

    public static function all()
    {
        // return $this->blog_posts; // Jika Properti Biasa
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //  Cara tanpa Collection
        // $posts = self::$blog_posts;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        $posts = static::all(); // Mengambil dari function diatas

        return $posts->firstWhere('slug', $slug);
    }

}
