@extends('admin.master')

@section('title')
    Sub Sub Category
@endsection

@section('style')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                        <span class="input-group-text bg-primary border-primary text-white">
                            <i class="mdi mdi-calendar-range font-13"></i>
                        </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">Category</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Sub Sub Category Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('sub-sub-category.create') }}" class="btn btn-primary">Add Sub Sub Category</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sub Sub Category Name</th>
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subSubCategories as $subSubCategory)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $subSubCategory->name }}</td>
                            <td>{{ $subSubCategory->subCategory->name }}</td>
                            
                            <td>
                                <form action="{{ route('sub-sub-category.destroy', $subSubCategory->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('sub-sub-category.edit', $subSubCategory->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
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
