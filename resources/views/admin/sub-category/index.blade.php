@extends('admin.master')

@section('title')
    Sub Category
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
                    <li class="breadcrumb-item active">Sub Category</li>
                </ol>
            </div>
            <h4 class="page-title">Sub Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Sub Category Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('sub-category.create') }}" class="btn btn-primary">Add Sub Category</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subCategories as $subCategory)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $subCategory->name }}</td>
                            <td>{{ $subCategory->category->name }}</td>
                            <td><img src="{{ asset($subCategory->image) }}" height="60px" width="100px" alt=""></td>
                            <td>
                                <form action="{{ route('sub-category.destroy', $subCategory->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('sub-category.edit', $subCategory->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection