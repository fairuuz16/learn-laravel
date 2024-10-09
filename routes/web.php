<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'John Doe']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog'], ['posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts =  [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});