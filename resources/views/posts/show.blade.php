<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h1>{{$post->titulo}}</h1>
      @foreach($post->comments as $comment)
        {{$comment->comentario}}<br>
      @endforeach

      <form class="" action="/Post/{{$post->id}}/comment" method="post">
        {{ csrf_field () }}
        <input type="text" name="comentario" value="">
        <button type="submit" name="button">Agregar Comentario</button>
      </form>
  </body>
</html>
