@extends('admin.master')

@section('title')
    Order
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
                    <li class="breadcrumb-item active">Order</li>
                </ol>
            </div>
            <h4 class="page-title">Order</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Order Table</strong>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Sub Category name</th>
                            <th>Sub Sub Category Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->user->email }}</td>
                            <td>{{ $order->cart->product->name }}</td>
                            <td>{{ $order->cart->product->category->name }}</td>
                            <td>{{ $order->cart->product->category->subCategory->name }}</td>
                            <td>{{ $order->cart->product->category->subCategory->subSubCategory->name }}</td>
                            <td>{{ $order->cart->product->price }}</td>
                            <td>{{ $order->cart->quantity }}</td>
                            <td>{{ $order->cart->subtotal }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->status }}</td>

                            <td>
                                <form action="{{ route('product.destroy', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('product.edit', $order->id) }}" class="btn btn-primary btn-sm"><i class="uil-edit"></i></a>
                                    <a href="{{ route('product.show', $order->id) }}" class="btn btn-info btn-sm"><i class="uil-eye"></i></a>
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
