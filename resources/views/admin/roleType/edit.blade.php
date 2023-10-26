@extends('admin.master')

@section('title')
    Edit Role Type
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
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('roletype.index') }}">Role Type</a></li>
                    <li class="breadcrumb-item active">Role Type Edit</li>
                </ol>
            </div>
            <h4 class="page-title">Role Type Edit</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Edit Role Type</strong></div>
            <div class="card-body card-block">
                <form action="{{ route('roletype.update', $roleType->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class=" form-control-label">Name</label>
                        <input type="text" id="name" name="name" value="{{ $roleType->name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status" class=" form-control-label">Status: </label>
                        <label ><input type="radio" name="status" value="1" {{ $roleType->status == 1 ? 'checked' : '' }} > Published</label>
                        <label ><input type="radio" name="status" value="2" {{ $roleType->status == 2 ? 'checked' : '' }} > UnPublished</label>
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
</div>

@endsection

@section('script')

@endsection