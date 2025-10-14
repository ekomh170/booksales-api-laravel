{{-- Halaman untuk tampilkan daftar buku dari database --}}
@extends('layouts.app')

@section('content')
<h1>Daftar Buku</h1>
{{-- Table untuk tampilkan data buku dari database --}}
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>ISBN</th>
      <th>Penulis</th>
      <th>Genre</th>
      <th>Harga</th>
      <th>Stock</th>
    </tr>
  </thead>
  <tbody>
    {{-- Loop untuk tampilkan setiap buku dari database --}}
    @foreach($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->author->name }}</td>
        <td>{{ $book->genre }}</td>
        <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
        <td>{{ $book->stock }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection