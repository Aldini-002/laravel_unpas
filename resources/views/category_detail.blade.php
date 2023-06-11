@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $category->name }}</h1>

    @foreach ($blogs as $blog)
        <article class="mb-5 border-bottom">
            <a href="/blogs/{{ $blog->uuid }}" class="text-decoration-none">
                <h2>{{ $blog->title }}</h2>
            </a>
            <div>{!! $blog->excerpt !!}</div>
        </article>
    @endforeach
@endsection
