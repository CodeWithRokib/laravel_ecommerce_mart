@extends('admin.master')

@section('title')
    Company Info
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
                    <li class="breadcrumb-item active">Company</li>
                </ol>
            </div>
            <h4 class="page-title">Company</h4>
        </div>
    </div>
</div>
<!-- end page title -->

        <div class="row">
            <div class="col-lg-12 px-5">
                <div class="card" style="border:1px solid white">
                    <div class="card-header"><strong>Company Info</strong></div>
                    <div class="card-body card-block">
                        <form action="{{ route('company-info.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Company Name</label>
                                
                                <input type="text" id="company" name="name" value="{{ $company ? $company->name : ' ' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class=" form-control-label">Company Email</label>
                                <input type="text" id="email" name="email" value="{{ $company ? $company->email : ' ' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone" class=" form-control-label">Company Phone</label>
                                <input type="text" id="phone" name="phone" value="{{ $company ? $company->phone : ' ' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="about" class=" form-control-label">Company About</label>
                                <textarea name="about" id="about" cols="30" rows="10">{!! $company ? $company->about : ' ' !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="website" class=" form-control-label">Company Website</label>
                                <input type="text" id="website" name="website" value="{{ $company ? $company->website : ' ' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class=" form-control-label"><strong>Company Address</strong></label>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Street</label>
                                <input type="text" id="street" name="street" value="{{ $company ? $company->street : ' ' }}" class="form-control">
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="city" class=" form-control-label">City</label>
                                        <input type="text" id="city" name="city" value="{{ $company ? $company->city : ' ' }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="postal_code" class=" form-control-label">Postal Code</label>
                                        <input type="text" id="postal_code" name="postal_code" value="{{ $company ? $company->postal_code : ' ' }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Country</label>
                                <input type="text" id="country" name="country" value="{{ $company ? $company->country : ' ' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="logo" class=" form-control-label">Logo</label>
                                <input type="file" id="logo" name="logo" class="form-control">
                                @if ($company != null && $company->logo != null)
                                    <img src="{{ $company->logo }}" alt="" width="250px" height="80px">
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="favicon" class=" form-control-label">Favicon</label>
                                <input type="file" id="favicon" name="favicon" class="form-control">
                                @if ($company && $company->favicon)
                                    <img src="{{ $company->favicon }}" alt="" width="80px" height="80px">
                                @endif
                            </div>
                            <div class="from-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
    <script>
        CKEDITOR.replace( 'about' );
    </script>
@endsection