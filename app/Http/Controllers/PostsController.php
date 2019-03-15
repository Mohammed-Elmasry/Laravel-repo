<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index(){
        $posts = [
            'id' => 1,
            'title' => "this is title 1",
            'description' => "this is description 1",
        ];
        
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function create(){
        return view('posts.create');
    }
    

    public function store(){
        Post::create(Request()->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post){ //type hinting
        // $post = Post::find($post);
        $post = Post::find($post)->first();
        return view('posts.edit',[
            'post' => $post,
        ]);
    }

    public function update(Post $post){
        //this logic handles updating in the database
        
        return view('posts.update');
    }
}
