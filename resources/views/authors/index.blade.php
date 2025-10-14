{{-- Halaman untuk tampilkan daftar penulis dari database --}}
@extends('layouts.app')

@section('content')
<h1>Daftar Penulis</h1>
{{-- Table untuk tampilkan data penulis dari database --}}
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Negara</th>
      <th>Tanggal Lahir</th>
    </tr>
  </thead>
  <tbody>
    {{-- Loop untuk tampilkan setiap penulis dari database --}}
    @foreach($authors as $author)
      <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td>{{ $author->email }}</td>
        <td>{{ $author->country }}</td>
        <td>{{ $author->birth_date->format('d/m/Y') }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
