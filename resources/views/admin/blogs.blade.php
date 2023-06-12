@extends('layouts.admin')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Blogs</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            @if (request('page') > 1)
                                <td>{{ $loop->iteration + (request('page') - 1) * 10 }}</td>
                            @else
                                <td>{{ $loop->iteration }}</td>
                            @endif
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->category->name }}</td>
                            <td>
                                <a href="/admin/blogs/{{ $blog->uuid }}" class="btn btn-sm btn-info"><span
                                        data-feather="eye"></span></a>
                                <a href="#" class="btn btn-sm btn-warning"><span data-feather="edit"></span></a>
                                <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash-2"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">{{ $blogs->links() }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
