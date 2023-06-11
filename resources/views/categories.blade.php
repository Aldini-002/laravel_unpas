@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Blogs</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/category/{{ $category->uuid }}" class="text-decoration-none">
                    <h2>{{ $category->name }}</h2>
                </a>
            </li>
        </ul>
    @endforeach
@endsection
