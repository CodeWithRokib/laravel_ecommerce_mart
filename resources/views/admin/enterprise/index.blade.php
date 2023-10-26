@extends('admin.master')

@section('title')
    Entreprenerus
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
                    {{-- <li class="breadcrumb-item"><a href="{{ route('sub-sub-category.index') }}">Sub Sub Category</a></li> --}}
                    <li class="breadcrumb-item active">Entreprenerus</li>
                </ol>
            </div>
            <h4 class="page-title">Entreprenerus</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Entreprenerus Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('entrepreneurs.create') }}" class="btn btn-primary">Add Entreprenerus</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Entreprenerus Name</th>
                            <th scope="col">Entreprenerus Email</th>
                            <th scope="col">Entreprenerus Phone</th>
                            <th scope="col">Entreprenerus Address</th>
                            <th scope="col">Entreprenerus BIOS</th>
                            <th scope="col">Entreprenerus Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enterprises as $enterprise)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $enterprise->name }}</td>
                            <td>{{ $enterprise->email }}</td>
                            <td>{{ $enterprise->phone }}</td>
                            <td>{{ $enterprise->address }}</td>
                            <td>{{ $enterprise->bios }}</td>
                            <td><img src="{{ asset($enterprise->image) }}" height="60px" width="100px" alt=""></td>
                            <td>
                                <form action="{{ route('entrepreneurs.destroy', $enterprise->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('entrepreneurs.edit', $enterprise->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="uil-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>

<!-- end row -->

@endsection

@section('script')

@endsection
