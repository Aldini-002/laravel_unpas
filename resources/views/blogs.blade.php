@extends('layouts.main')

@section('content')
    <h1>Blogs</h1>

    @foreach ($blogs as $blog)
        <article class="mb-3">
            <a href="/blogs/{{ $blog['slug'] }}">
                <h2>{{ $blog['title'] }}</h2>
            </a>
            <h5>By : {{ $blog['author'] }}</h5>
            <p>{!! $blog['body'] !!}</p>
        </article>
    @endforeach
@endsection
