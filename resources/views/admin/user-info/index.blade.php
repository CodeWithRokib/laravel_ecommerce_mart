@extends('admin.master')

@section('title')
    User Info
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
                    <li class="breadcrumb-item active">User Info</li>
                </ol>
            </div>
            <h4 class="page-title">User Info</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">User Info Table</strong>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>NID Number</th>
                            <th>Date of Birth</th>
                            <th>Company Card Image</th>
                            <th>Company Banner</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userInfos as $userInfo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $userInfo->user_name }}</td>
                            <td>{{ $userInfo->user_email }}</td>
                            <td>{{ $userInfo->phone }}</td>
                            <td>{{ $userInfo->nid }}</td>
                            <td>{{ $userInfo->dob }}</td>
                            <td>
                                <img src="{{ asset($userInfo->card_image) }}" alt="" width="100px">
                            </td>
                            <td>
                                <img src="{{ asset($userInfo->banner) }}" alt="" width="100px">
                            </td>
                            <td>{{ $userInfo->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <form action="{{ route('userInfo.destroy', $userInfo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
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
