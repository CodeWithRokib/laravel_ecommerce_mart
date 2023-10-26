@extends('admin.master')

@section('title')
    Create Section
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
                        <h1>Create Section</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li><a href="{{ route('section.index') }}">Section</a></li>
                            <li class="active">Create Section</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 px-4">
    <div class="card" style="border:1px solid white">
        <div class="card-header"><strong>Create Section</strong></div>
        <div class="card-body card-block">
            <form action="{{ route('section.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
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