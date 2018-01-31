<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
  </head>
  <body>
    <div class="container">
      <h3>cursos</h3>
      <link rel="stylesheet" href="/css/app.css">
      <ul class="list-group">
        @foreach ($cursos as $curso)
          <li class="list-group-item">
            {{$curso}}
          </li>
        @endforeach
      </ul>
    </div>
    <script type="text/javascript" src="/js/app.js">
    </script>
  </body>
</html>
