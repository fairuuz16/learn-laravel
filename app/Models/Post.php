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
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, temporibus minus consequatur necessitatibus quas laborum deleniti possimus laudantium ipsum sequi enim eligendi voluptates, quasi asperiores commodi dignissimos nesciunt velit nihil!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'John Doe',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, temporibus minus consequatur necessitatibus quas laborum deleniti possimus laudantium ipsum sequi enim eligendi voluptates, quasi asperiores commodi dignissimos nesciunt velit nihil!'
            ],
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }
        
        return $post;
    }
}
