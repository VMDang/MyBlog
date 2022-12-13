<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController
{
    public function __construct()
    {

    }

    public function home(){
        $posts = Post::all();

        return view('home', compact('posts'));
    }
}
