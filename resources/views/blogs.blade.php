@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Blogs</h1>

    @foreach ($blogs as $blog)
        <article class="mb-3">
            <a href="/blogs/{{ $blog->slug }}">
                <h2>{{ $blog->title }}</h2>
            </a>
            <div>{!! $blog->excerpt !!}</div>
        </article>
    @endforeach
@endsection
