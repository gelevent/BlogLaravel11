<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'Judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Gemi Widodo',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem itaque, alias velit
            saepe molestias
            voluptate ut, voluptas quis ad omnis veniam non neque iure iusto aliquam aspernatur quaerat sit?
            Accusamus?'
            ],
            [
                'id' => 2,
                'slug' => 'Judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Gemi Widodo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita esse corporis
            quisquam amet, laborum quaerat eius nemo temporibus voluptas, quasi tempora nostrum dolorem. Ratione
            voluptatem debitis, ullam deserunt culpa ex?'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;
    }
}
