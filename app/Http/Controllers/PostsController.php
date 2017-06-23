<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function getPosts(){
        $posts = Post::simplePaginate(5);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request) {
         Post::create($request->all());

         return redirect()->route('addPost')->with('Success', 'Post added');
    }

    public function addPost() {
        return view('posts.add');
    }
}
