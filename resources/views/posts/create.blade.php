@extends('layout.principal')
@section('contenido')
  <h1>Creacion de Posts</h1>
@endsection

@section('contenido2')
<form method="post">
  {{ csrf_field () }}
    Titulo
    <input type="text" name="titulo">
    <br>
    Contenido
    <input type="text" name="contenido">
    <br>
    <input type="hidden" name="user_id" value="1">
    <br>
    <input type="submit" name="submit">
</form>
@endsection
