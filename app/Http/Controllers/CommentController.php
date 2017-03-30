<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store (\App\Post $post){
    //  \App\Comment::create(['comentario'=>request('comentario'),
    //  'post_id'=>$post->id]);
      $post->agregarComentario(request('comentario'));
      return back();
    }
}
