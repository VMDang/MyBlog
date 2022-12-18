<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function __construct()
    {

    }

    public function home(){
        $posts = Post::where('status', 1)->get();
        $posts = $posts->reverse();

        $this->countPostsOfCategory();

        return view('home', compact('posts'));
    }

    public function countPostsOfCategory(){
        $countPosts = [];

        $countPosts['fashion'] = DB::table('posts')
            ->where([
                ['category_id', '=', 1],
                ['status', '=', 1]
            ])
            ->count('id');

        $countPosts['travel'] = DB::table('posts')
            ->where([
                ['category_id', '=', 2],
                ['status', '=', 1]
            ])
            ->count('id');

        $countPosts['technology'] = DB::table('posts')
            ->where([
                ['category_id', '=', 3],
                ['status', '=', 1]
            ])
            ->count('id');

        session()->put('countPosts', $countPosts);
    }

    public function contact(){
        return view('contact');
    }
}
