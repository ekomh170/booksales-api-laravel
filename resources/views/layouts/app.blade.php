{{-- Layout utama untuk semua halaman --}}
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>FL-2024226 – MVC Sederhana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- CSS sederhana untuk styling table dan navigasi --}}
  <style>
    body{font-family:system-ui,Arial,sans-serif;margin:24px}
    table{border-collapse:collapse;width:100%}
    th,td{border:1px solid #ddd;padding:8px;text-align:left}
    th{background:#f5f5f5}
    nav a{margin-right:12px}
  </style>
</head>
<body>
  {{-- Navigasi antar halaman --}}
  <nav>
    <a href="{{ route('books.index') }}">Books</a>
    <a href="{{ route('authors.index') }}">Authors</a>
  </nav>
  <hr>
  {{-- Tempat content dari child view --}}
  @yield('content')
</body>
</html>
