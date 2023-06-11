@extends('layouts.main')

@section('content')
    <h1 class="mb-3">{{ $category->name }}</h1>

    @foreach ($blogs as $blog)
        <article class="mb-3">
            <a href="/blogs/{{ $blog->uuid }}">
                <h2>{{ $blog->title }}</h2>
            </a>
            <div>{!! $blog->excerpt !!}</div>
        </article>
    @endforeach
@endsection
