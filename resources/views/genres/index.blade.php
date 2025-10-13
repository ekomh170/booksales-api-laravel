@extends('layouts.app')

@section('content')
<h1>Daftar Genre</h1>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
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
