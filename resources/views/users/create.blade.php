@extends('layout.principal')
@section('contenido')
  <h1>Registro de Usuario</h1>
@endsection

@section('contenido2')
<table>
  <form action="/registro" method="post">
    {{ csrf_field () }}
      Nombre
      <input type="text" name="name">
      <br>
      Email
      <input type="text" name="email">
      <br>
      Password
      <input type="password" name="password">
      <br>
      <input type="submit" name="submit">
  </form>
</table>
@endsection
