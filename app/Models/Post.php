<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul artikel 1' ,
                'author' => 'Muhammad Taufik',
                'body'  => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, cum'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul artikel 2' ,
                'author' => 'Muhammad Taufik',
                'body'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, dolores officia architecto dolore velit dignissimos?'
            ]
            ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // }); ini pake call back

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug); //arrow function

        if(! $post){
            abort(404);
        }
        return $post;
    }

}