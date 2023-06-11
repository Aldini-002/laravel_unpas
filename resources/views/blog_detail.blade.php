@extends('layouts.main')

@section('content')
    <h1 class="mb-3">Blog Detail</h1>

    <article class="mb-3">
        <h2>{{ $blog->title }}</h2>
        <p>By. Bocchi Bull in <a href="/category/{{ $blog->category->uuid }}">{{ $blog->category->name }}</a></p>
        <p>{!! $blog->body !!}</p>
    </article>

    <a href="/blogs" class="btn btn-sm btn-info">Back</a>
@endsection
