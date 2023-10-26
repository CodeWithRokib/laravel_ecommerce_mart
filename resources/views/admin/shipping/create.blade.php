
@extends('admin.master')

@section('title')
    shipping Add
@endsection

@section('style')
     <!-- Datatables css -->
     <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

     <!-- Datatables css -->
     <link href="assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection

@section('body')

<div class="breadcrumbs mb-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Shipping Details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('shipping.index') }}">Shipping List</a></li>
                    <li class="breadcrumb-item active">Create Shipping</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


       <div class="modal-content ">
           <div class="modal-header ">
               <h4 class="modal-title text-center" id="myLargeModalLabel">Shipping Add Form</h4>
               
           </div>
           <div class="modal-body">
               <form method="POST" role="form" class="parsley-examples" id="EmployeeForm" action={{route('shipping.store')}}>
                @csrf
                @method('POST')
                @if(Session::has('success'))
                    <div class="alert-success alert">{{Session::get('success')}}</div>
                @endif
                </div>
                   <div class="form-group row p-2">
                       <label for="type" class="col-sm-4 col-form-label">Type<span
                               class="text-danger">*</span></label>
                       <div class="col-sm-7">
                           <input type="text" required parsley-type="text" class="form-control" id="product_name"
                               name="product_name" placeholder="type" >
                       </div>
                   </div>

                   <div class="form-group row p-2">
                       <label for="price" class="col-sm-4 col-form-label">Price<span
                               class="text-danger">*</span></label>
                       <div class="col-sm-7">
                           <input type="text" required class="form-control" id="price" name="price" placeholder="Price">
                       </div>
                   </div>

                   

                <div class="form-group row p-2">
                    <label for="" class="col-sm-4 col-form-label">Status:<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" id="" required name="status" value="">
                            <option selected disabled>Choose One Option</option>
                            <option value="Active">Active</option>
                            <option value="Pending">InActive</option>
                        </select>
                    </div>
                </div>

                  
                   <div class="form-group row mb-0 ">
                       <div class="col-sm-8 offset-sm-4">
                           <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                               Submit
                           </button>
                           <button type="button" data-dismiss="modal" class="btn btn-light waves-effect">
                               Cancel
                           </button>
                       </div>
                   </div>
               </form>
           </div>
       </div><!-- /.modal-content -->

 @endsection