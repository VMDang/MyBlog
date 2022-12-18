<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
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
            $nameImage = 'image_1.jpg';
        }

        $post = new Post();
        $post->title = $requestData['title'];
        $post->image = $nameImage;
        $post->sub_headline = $requestData['sub_headline'];
        $post->body = $requestData['body'];
        $post->category_id = $requestData['category'];
        $post->status = 1;
        $post->save();

        return redirect()->route('home');
    }

    public function listFashion(){
        $list = DB::table('posts', 'p')
                ->join('categories as c', 'p.category_id', '=', 'c.id')
                ->where([
                    ['c.name', '=', 'fashion'],
                    ['p.status', '=', 1]
                ])
                ->orderBy('p.created_at', 'desc')
                ->get('p.*');

        return view('fashion.list', compact('list'));
    }

    public function listTravel(){
        $list = DB::table('posts', 'p')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->where([
                ['c.name', '=', 'travel'],
                ['p.status', '=', 1]
            ])
            ->orderBy('p.created_at', 'desc')
            ->get('p.*');

        return view('travel.list', compact('list'));
    }

    public function listTechnology(){
        $list = DB::table('posts', 'p')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->where([
                ['c.name', '=', 'technology'],
                ['p.status', '=', 1]
            ])
            ->orderBy('p.created_at', 'desc')
            ->get('p.*');

        return view('technology.list', compact('list'));
    }

    public function showPost($id){
        $post = Post::find($id);

        return view('posts.post', compact('post'));
    }

    public function EditPost($id){
        $post = Post::find($id);
        $categories = DB::table('categories')
            ->get(['id', 'name']);

        return view('posts.edit', compact('post', 'categories'));
    }

    public function updatePost(Request $request, $id) {
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
            $post = DB::table('posts')
                    ->where('id', '=', $id)
                    ->get('image');
            $nameImage = $post[0]->image;
        }

        Post::where('id', $id)
            ->update([
                'title' => $requestData['title'],
                'image' => $nameImage,
                'sub_headline' => $requestData['sub_headline'],
                'body' => $requestData['body'],
                'category_id' => $requestData['category'],
                'updated_at' => Carbon::now(),
            ]);

        return redirect()->route('post.show', $id);
    }

    public function deletePost($id){
        if (empty(Post::findOrFail($id))){
            return redirect()->route('home');
        }

        Post::where('id', $id)
            ->update([
                    'status' => 0,
                    'updated_at' => Carbon::now()
                ]);

        return redirect()->back();
    }
}
