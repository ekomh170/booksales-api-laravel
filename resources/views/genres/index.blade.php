{{-- Halaman untuk tampilkan daftar genre buku --}}
@extends('layouts.app')

@section('content')
<h1>Daftar Genre</h1>
{{-- Table untuk tampilkan data genre --}}
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    {{-- Loop untuk tampilkan setiap genre --}}
    @foreach($genres as $g)
      <tr>
        <td>{{ $g['id'] }}</td>
        <td>{{ $g['nama'] }}</td>
        <td>{{ $g['slug'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
