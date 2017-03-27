<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index (){
        return view('posts.index', ['posts'=>Post::all()]);
    }

    public function show (Post $post){
      return view('posts.show', ['posts'=>$post]);
    }
}
