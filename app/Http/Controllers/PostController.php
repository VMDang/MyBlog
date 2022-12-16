<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function savePost(Request $request){
        $requestData = $request->all();

        if (empty($requestData['sub_headline'])){
            $requestData['sub_headline'] = 'No sub headline';
        }

        if (empty($requestData['body'])){
            $requestData['body'] = 'No description';
        }

        if ($request->file('image')){
            $nameImage = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images/posts/'), $nameImage);
        }else {
            $nameImage = 'image_1.png';
        }

        $post = new Post();
        $post->title = $requestData['title'];
        $post->image = $nameImage;
        $post->sub_headline = $requestData['sub_headline'];
        $post->body = $requestData['body'];
        $post->category_id = $requestData['category'];
        $post->save();

        return redirect()->route('home');
    }

    public function listFashion(){
        $list = DB::table('posts', 'p')
                ->join('categories as c', 'p.category_id', '=', 'c.id')
                ->where('c.name', '=', 'fashion')
                ->orderBy('p.created_at', 'desc')
                ->get();

        return view('fashion.list', compact('list'));
    }

    public function listTravel(){
        $list = DB::table('posts', 'p')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->where('c.name', '=', 'travel')
            ->orderBy('p.created_at', 'desc')
            ->get();

        return view('travel.list', compact('list'));
    }

    public function listTechnology(){
        $list = DB::table('posts', 'p')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->where('c.name', '=', 'technology')
            ->orderBy('p.created_at', 'desc')
            ->get();

        return view('technology.list', compact('list'));
    }

    public function countPostsOfCategory(){
        $countPosts = [];

        $countPosts['fashion'] = DB::table('posts')
                        ->where('category_id', '=', 1)
                        ->count('id');

        $countPosts['travel'] = DB::table('posts')
                        ->where('category_id', '=', 2)
                        ->count('id');

        $countPosts['technology'] = DB::table('posts')
            ->where('category_id', '=', 3)
            ->count('id');

        session()->put('countPosts', $countPosts);

    }
}
