@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Blog Detail</h1>

    <article class="mb-3">
        <h2>{{ $blog->title }}</h2>
        <p>
            By. <a href="/blogs/user/{{ $blog->user->uuid }}" class="text-decoration-none">{{ $blog->user->name }}</a> in
            <a href="/category/{{ $blog->category->uuid }}" class="text-decoration-none">{{ $blog->category->name }}</a>
        </p>
        <p>{!! $blog->body !!}</p>
    </article>

    <a href="/blogs" class="btn btn-sm btn-info">Back</a>
@endsection
