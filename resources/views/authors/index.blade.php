{{-- Halaman untuk tampilkan daftar penulis --}}
@extends('layouts.app')

@section('content')
<h1>Daftar Penulis</h1>
{{-- Table untuk tampilkan data penulis --}}
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Negara</th>
    </tr>
  </thead>
  <tbody>
    {{-- Loop untuk tampilkan setiap penulis --}}
    @foreach($authors as $a)
      <tr>
        <td>{{ $a['id'] }}</td>
        <td>{{ $a['nama'] }}</td>
        <td>{{ $a['negara'] }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
