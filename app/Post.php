<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'titulo', 'contenido', 'user_id',
  ];

  public function comments (){
    return $this->hasMany(Comment::class);
  }

  public function agregarComentario ($comentario){
    $this->comments()->create(['comentario'=>$comentario]);
  }
}
