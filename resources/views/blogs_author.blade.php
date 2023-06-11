@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Blogs {{ $user->name }}</h1>

    @foreach ($blogs as $blog)
        <article class="mb-5 pb-4 border-bottom">
            <a href="/blogs/{{ $blog->uuid }}" class="text-decoration-none">
                <h2>{{ $blog->title }}</h2>
            </a>
            <p>
                By. <a href="/blogs/author/{{ $blog->author->uuid }}"
                    class="text-decoration-none">{{ $blog->author->name }}</a>
                in
                <a href="/category/{{ $blog->category->uuid }}" class="text-decoration-none">{{ $blog->category->name }}</a>
            </p>
            <p>{!! $blog->excerpt !!}</p>
            <a href="/blog/{{ $blog->uuid }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection
