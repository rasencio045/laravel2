<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($users as $user)
      <h1>{{$user->name}}</h1>
    @endforeach
  </body>
</html>
