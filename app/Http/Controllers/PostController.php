<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index (){
        return view('posts.index', ['posts'=>Post::all()]);
    }

    public function show (Post $post){
      return view('posts.show', ['post'=>$post]);
    }

    public function create (){
      return view ('posts.create');
    }

    public function store (){
      $this->validate(request(),['titulo'=>'required',
      'contenido'=>'required',
      'user_id'=>'required']);

      Post::create(request()->all());

      return redirect('/');
    }
}
