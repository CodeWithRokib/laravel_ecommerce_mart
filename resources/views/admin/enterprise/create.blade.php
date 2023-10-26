@extends('admin.master')

@section('title')
    Create Entreprenerus
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
                    <li class="breadcrumb-item"><a href="{{ route('entrepreneurs.index') }}">Entreprenerus</a></li>
                    <li class="breadcrumb-item active">Create Entreprenerus</li>
                </ol>
            </div>
            <h4 class="page-title">Create Entreprenerus</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Create Entreprenerus</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('entrepreneurs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Entreprenerus Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" class=" form-control-label">Entreprenerus Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone" class=" form-control-label">Entreprenerus Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address" class=" form-control-label">Entreprenerus Address</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="bios" class=" form-control-label">Entreprenerus BIOS</label>
                    <textarea name="bios" id="bios" cols="30" rows="10"></textarea>
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
        CKEDITOR.replace( 'address' );
        CKEDITOR.replace( 'bios' );
    </script>
@endsection
