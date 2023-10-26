@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('style')

@endsection

@section('body')
<div class="breadcrumbs mb-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Category</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li><a href="{{ route('category.index') }}">Category</a></li>
                            <li class="active">Edit Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Edit Category</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class=" form-control-label">Category Name</label>
                    <input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image" class=" form-control-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if ($category->image)
                        <img src="{{ asset($category->image) }}" alt="" width="100px" height="100px">
                    @endif
                </div>
                <div class="form-group">
                    <label for="status" class=" form-control-label">Status: </label>
                    <label ><input type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked' : '' }} > Published</label>
                    <label ><input type="radio" name="status" value="2" {{ $category->status == 2 ? 'checked' : '' }} > UnPublished</label>
                </div>
                <div class="form-group">
                    <div class="from-group">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection