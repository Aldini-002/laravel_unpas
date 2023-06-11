@extends('layouts.main')

@section('content')
    <h1 class="mb-5">About</h1>
    <h3>{{ $user->name }}</h3>
    <p>{{ $user->email }}</p>
    <img src="/img/{{ $image }}" alt="error" class="img-thumbnail rounded-circle" width="200">
@endsection
