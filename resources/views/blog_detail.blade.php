@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Blog Detail</h1>

    <article class="mb-3">
        <h2>{{ $blog['title'] }}</h2>
        <h5>By : {{ $blog['author'] }}</h5>
        <p>{!! $blog['body'] !!}</p>
    </article>

    <a href="/blogs" class="btn btn-sm btn-info">Back</a>
@endsection
