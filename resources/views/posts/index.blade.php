<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($posts as $post)
      <h1>{{$post->titulo}}</h1>
      <h1>{{$post->id}}</h1>
    @endforeach
  </body>
</html>
