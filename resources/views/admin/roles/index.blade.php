@extends('admin.master')

@section('title')
    Role
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
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li> --}}
                    <li class="breadcrumb-item active">Role</li>
                </ol>
            </div>
            <h4 class="page-title">Role</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Role Table</strong>
                <span class="ms-auto" style="float: right;"><a href="{{ route('role.create') }}" class="btn btn-primary">Add Role</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role Type</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $role->user->name }}</td>
                            <td>{{ $role->roletype->name }}</td>
                            <td>{{ $role->permission->section }}</td>
                            <td>
                                <form action="{{ route('role.destroy', $role->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit-alt"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection