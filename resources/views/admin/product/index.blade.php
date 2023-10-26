@extends('admin.master')

@section('title')
    Product
@endsection

@section('style')
    <link href="{{ asset('/') }}admin/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
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
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
            <h4 class="page-title">Product</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Product Table</strong>
                <span class="ms-auto" style="float: right"><a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a></span>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Sub Category name</th>
                            <th>Sub Sub Category Name</th>
                            <th>Entreprenerus Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>SKU</th>
                            <th>Code</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subCategory->name }}</td>
                            <td>{{ $product->subSubCategory->name }}</td>
                            <td>{{ $product->enterprise->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->code }}</td>
                            <td><img src="{{ asset($product->image) }}" alt="" width="50"></td>
                            <td>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-info btn-sm"><i class="uil-eye"></i></a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="uil-trash-alt"></i></button>
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
    <!-- Datatables js -->
    <script src="{{ asset('/') }}admin/assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/vendor/responsive.bootstrap5.min.js"></script>

    <!-- Datatable Init js -->
    <script src="{{ asset('/') }}admin/assets/js/pages/demo.datatable-init.js"></script>
@endsection
