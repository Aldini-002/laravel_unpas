@extends('layouts.admin')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-8">
                    <h2>{{ $blog->title }}</h2>

                    <a href="/admin/blogs" class="btn btn-dark mb-3">Kembali</a>
                    <a href="/admin/blogs" class="btn btn-warning mb-3">Perbarui</a>
                    <a href="/admin/blogs" class="btn btn-danger mb-3">Hapus</a>

                    <img src="https://source.unsplash.com/1200x400?{{ $blog->category->name }}" class="img-fluid"
                        alt="error">

                    <article class="my-3">
                        {!! $blog->body !!}
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
