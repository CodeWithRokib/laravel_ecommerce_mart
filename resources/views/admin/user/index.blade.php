
@extends('admin.master')

@section('title')
    User Details List
@endsection

@section('style')
     <!-- Datatables css -->
     <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

     <!-- Datatables css -->
     <link href="assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection

@section('body')

    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li> --}}
                    <li class="breadcrumb-item active">User Details List</li>
                </ol>
            </div>
            <h4 class="page-title">User Details List</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">User Details List Table</strong>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td class="text-wrap">{{ $user->name }}</td>
                            <td class="text-wrap">{{ $user->email }}</td>
                            <td class="text-wrap">{{ $user->role }}</td>
                            <td class="text-wrap">{{ $user->status }}</td>
                            
                            

                            <td class="d-flex ">
                                <a href={{route('user.edit',$user->id)}} class="btn btn-primary btn-sm ">
                                    <i class="fas fa-edit">Update</i>
                                    
                                <a href={{route('user.delete',$user->id)}}
                                    class="btn btn-danger btn-sm deletebtn" >
                                    <i class="fas fa-trash">Delete</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            @if(Session::has('status'))
                <div class="alert-success alert">{{Session::get('status')}}</div>
            @endif
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->



@endsection

@section('script')
    <!-- Datatables js -->
    <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>

    <!-- Datatable Init js -->
    <script src="assets/js/pages/demo.datatable-init.js"></script>

    <!-- Datatables js -->
    <script src="assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="assets/js/vendor/buttons.html5.min.js"></script>
    <script src="assets/js/vendor/buttons.flash.min.js"></script>
    <script src="assets/js/vendor/buttons.print.min.js"></script>

 @endsection