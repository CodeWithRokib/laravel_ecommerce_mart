@extends('admin.master')

@section('title')
    Create Service
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
                        <h1>Create Service</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li><a href="{{ route('service.index') }}">Service</a></li>
                            <li class="active">Create Service</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Create Service</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Service Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your service name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location" class=" form-control-label">Service Location</label>
                    <select name="location" class="form-control" id="">
                        <option value="Kolkata">Kolkata</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price" class=" form-control-label">Service Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter your price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Service Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="validity" class=" form-control-label">Service Validity</label>
                    <input type="date" id="validity" name="date" placeholder="Enter your validity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image" class=" form-control-label">Service Image</label>
                    <input type="file" id="image" name="image" class="form-control">
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