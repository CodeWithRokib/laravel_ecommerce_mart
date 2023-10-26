@extends('admin.master')

@section('title')
    Create Blog
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
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active">Create Blog</li>
                </ol>
            </div>
            <h4 class="page-title">Create Blog</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-lg-12 px-4">
    <div class="card">
        <div class="card-header"><strong>Create Blog</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class=" form-control-label">Blog Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Banner Description</label>
                    <textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image" class=" form-control-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status" class=" form-control-label">Status: </label>
                    <label ><input type="radio" name="status" value="1" checked > Published</label>
                    <label ><input type="radio" name="status" value="0" > UnPublished</label>
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
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection
