<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Jonsnow',
                        'title' => 'About Page'
]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

route::get('/posts/{slug}', function($slug){
   

        $post = Post::find($slug);

        return view('post', ['title' => 'Single Post','post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'mhmmdtaufikh939@gmail.com',
                            'ig' => 'mhtaufikh',
                            'title' => 'Contact Page']);
});
