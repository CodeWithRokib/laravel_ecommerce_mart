
@extends('admin.master')

@section('title')
    User updated
@endsection

@section('style')
     <!-- Datatables css -->
     <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

     <!-- Datatables css -->
     <link href="assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection

@section('body')




       <div class="modal-content ">
           <div class="modal-header ">
               <h4 class="modal-title text-center" id="myLargeModalLabel">User Update Form</h4>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           </div>
           <div class="modal-body">
               <form method="POST" role="form" class="parsley-examples" id="EmployeeForm" action={{route('user.update',$users['id'])}}>
                @csrf
                @method('PUT')
                @if(Session::has('success'))
                    <div class="alert-success alert">{{Session::get('success')}}</div>
                @endif
                </div>
                   <div class="form-group row p-2">
                       <label for="name" class="col-sm-4 col-form-label">Name<span
                               class="text-danger">*</span></label>
                       <div class="col-sm-7">
                           <input type="text" required parsley-type="text" class="form-control" id="name"
                               name="name" value={{$users['name']}}>
                       </div>
                   </div>

                   <div class="form-group row p-2">
                       <label for="email" class="col-sm-4 col-form-label">Email<span
                               class="text-danger">*</span></label>
                       <div class="col-sm-7">
                           <input type="email" required class="form-control" id="email" name="email" value={{$users['email']}}>
                       </div>
                   </div>

                   <div class="form-group row p-2">
                    <label for="role" class="col-sm-4 col-form-label">Role Type:<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" id="role" required name="role" value={{$users['role']}}>
                            <option selected disabled>Choose One Option</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="Customer">Customer</option>
                            <option value="Deliver Boy">Deliver Boy</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row p-2">
                    <label for="" class="col-sm-4 col-form-label">Status:<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" id="" required name="status" value={{$users['status']}}>
                            <option selected disabled>Choose One Option</option>
                            <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                </div>

                  
                   <div class="form-group row mb-0 ">
                       <div class="col-sm-8 offset-sm-4">
                           <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                               Update
                           </button>
                           <button type="button" data-dismiss="modal" class="btn btn-light waves-effect">
                               Cancel
                           </button>
                       </div>
                   </div>
               </form>
           </div>
       </div><!-- /.modal-content -->

{{-- Employees Add Models End --}}

{{-- Employees Add Models End --}}
@endsection
