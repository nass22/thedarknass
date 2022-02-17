<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::all()->sortByDesc('id')->take(4);
        return view('front.index', compact('posts')); 
    }

    public function getPost($id){
        $post=Post::find($id);
        return view('front.project', compact('post'));
    }

    public function getAllPosts(){
        $posts=Post::all();
        return view('front.projects', compact('posts'));
    }
     
}
