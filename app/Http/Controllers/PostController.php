<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('front.index', ['posts'=>Post::all()]); 
    }

    public function getPost($id){
        $post=Post::find($id);
        return view('front.project', compact('post'));
    }
     
}
