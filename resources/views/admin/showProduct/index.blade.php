@extends('admin.master')

@section('title')
    Show Product
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
                    <li class="breadcrumb-item"><a href="{{ route('show-product.index') }}">Dashboards</a></li>
                    <li class="breadcrumb-item active">Show Product</li>
                </ol>
            </div>
            <h4 class="page-title">Show Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Show Product Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('show-product.create') }}" class="btn btn-primary">Add Show Product</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($showProducts as $showProduct)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $showProduct->category->name }}</td>
                            <td>{{ $showProduct->subCategory->name }}</td>
                            <td><img src="{{ asset($showProduct->image) }}" alt="" width="100"></td>
                            <td>
                                <form action="{{ route('show-product.destroy', $showProduct->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('show-product.edit', $showProduct->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
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
