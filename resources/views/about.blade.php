@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="resources/img/{{ $image }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
@endsection

