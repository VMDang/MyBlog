<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function savePost(Request $request){
        $requestData = $request->all();

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

}
