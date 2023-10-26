@extends('admin.master')

@section('title')
    Role Type
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
                    <li class="breadcrumb-item active">Role Type</li>
                </ol>
            </div>
            <h4 class="page-title">Role Type</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Role Type Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('roletype.create') }}" class="btn btn-primary">Add Role Type</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role Type</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roleTypes as $roleType)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $roleType->name }}</td>
                            <td>{{ $roleType->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <form action="{{ route('roletype.destroy', $roleType->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('roletype.edit', $roleType->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit-alt"></i></a>
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