@extends('admin.master')

@section('title')
    Create Social Feed
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
                    <li class="breadcrumb-item"><a href="{{ route('social.index') }}">Social Feed</a></li>
                    <li class="breadcrumb-item active">Create Social Feed</li>
                </ol>
            </div>
            <h4 class="page-title">Create Social Feed</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Create Social Feed</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('social.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Social Feed Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link" class=" form-control-label">Social Feed Link</label>
                    <input type="text" id="link" name="link" placeholder="Enter link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="icon" class=" form-control-label">Social Feed Icon</label>
                    <input type="text" id="icon" name="icon" placeholder="Enter Font Awesome Icon Name" class="form-control">
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
    
@endsection
