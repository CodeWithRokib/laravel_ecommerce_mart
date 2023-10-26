@extends('admin.master')

@section('title')
    Blog
@endsection

@section('style')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboards</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
            <h4 class="page-title">Blog</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Blog Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('blog.create') }}" class="btn btn-primary">Add Blog</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Blog Description</th>
                            <th scope="col">Blog Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->description }}</td>
                            <td><img src="{{ asset($blog->image) }}" height="60px" width="100px" alt=""></td>
                            <td>{{ $blog->status == 1 ? 'Published' : 'UnPublished' }}</td>
                            <td>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<!-- end row -->

@endsection

@section('script')

@endsection
