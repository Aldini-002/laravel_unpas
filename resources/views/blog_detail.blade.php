@extends('layouts.main')

@section('content')
    <h1>Blog Detail</h1>

    <article class="mb-3">
        <a href="/blogs/{{ $blog['slug'] }}">
            <h2>{{ $blog['title'] }}</h2>
        </a>
        <h5>By : {{ $blog['author'] }}</h5>
        <p>{!! $blog['body'] !!}</p>
    </article>

    <a href="/blogs" class="btn btn-sm btn-info">Back</a>
@endsection
