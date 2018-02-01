<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title> <!-- chama o titulo da pagina-->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>



    <div class="container">

      <div class="page-header">
        <h1>Cabeçalho</h1>
        <p>Para exibir o conteúdo, é necessário definir o conteúdo dentro do @@section('content') e @@endsection </p>
      </div>

      @yield('content') <!-- chama o conteúdo que deverá ficar entre o layouts-->

      <footer class="footer">
        <p>&copy; 2017 Curso de Verão USP</p>
      </footer>

    </div>

    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
