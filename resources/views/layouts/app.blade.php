<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Laravel Pertemuan 1 - MVC Sederhana - Eko Muchamad Haryono</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Arial,sans-serif;margin:24px}
    table{border-collapse:collapse;width:100%}
    th,td{border:1px solid #ddd;padding:8px;text-align:left}
    th{background:#f5f5f5}
    nav a{margin-right:12px}
  </style>
</head>
<body>
  <nav>
    <a href="{{ route('genres.index') }}">Genres</a>
    <a href="{{ route('authors.index') }}">Authors</a>
  </nav>
  <hr>
  @yield('content')
</body>
</html>
