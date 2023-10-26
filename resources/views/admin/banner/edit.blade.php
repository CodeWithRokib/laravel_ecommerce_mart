@extends('admin.master')

@section('title')
    Edit Banner
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
                    <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Banner</a></li>
                    <li class="breadcrumb-item active">Edit Banner</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Banner</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Edit Banner</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title" class=" form-control-label">Banner Title</label>
                        <input type="text" id="title" name="title" value="{{ $banner->title }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subtitle" class=" form-control-label">Banner Subtitle</label>
                        <input type="text" id="subtitle" name="subtitle" value="{{ $banner->subtitle }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="url" class=" form-control-label">Banner URL</label>
                        <input type="text" id="url" name="url" value="{{ $banner->url }}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class=" form-control-label">Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                        @if ($banner->image)
                            <img src="{{ asset($banner->image) }}" alt="" width="100px" height="100px">
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="status" class=" form-control-label">Status: </label>
                        <label ><input type="radio" name="status" value="1" {{ $banner->status == 1 ? 'checked' : '' }} > Published</label>
                        <label ><input type="radio" name="status" value="2" {{ $banner->status == 2 ? 'checked' : '' }} > UnPublished</label>
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
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<!-- end row -->

@endsection

@section('script')

@endsection
