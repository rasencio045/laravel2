<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nuestra pagina de prueba</title>
  </head>
  <body>
      @include ('layout.nav')
      @yield('contenido')
      @yield('contenido2')
      @include('layout.footer')
  </body>
</html>
