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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Product Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                <img src="{{ asset($product->image) }}" class="img-fluid" style="max-width: 280px;" alt="Product-img">
                            </a>

                            <div class="d-lg-flex d-none justify-content-center">
                                <a href="javascript: void(0);">
                                    <img src="{{ asset('/') }}admin/assets/images/products/product-1.jpg" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                </a>
                                <a href="javascript: void(0);" class="ms-2">
                                    <img src="{{ asset('/') }}admin/assets/images/products/product-6.jpg" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                </a>
                                <a href="javascript: void(0);" class="ms-2">
                                    <img src="{{ asset('/') }}admin/assets/images/products/product-3.jpg" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Product-img">
                                </a>
                            </div>
                            <!-- Simple card -->
                            <div class="d-lg-flex d-none justify-content-center pt-5">

                                <!-- Simple card -->
                                <div class="card d-block">
                                    <img class="card-img-top" src="{{ asset($product->enterprise->image) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Entreprenerus Name :{{ $product->enterprise->name }}</h5>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <!-- Product title -->
                            <h3 class="mt-0">{{ $product->name }} <a href="{{ route('product.edit', $product->id) }}" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                            <p class="mb-1">Added Date: {{ date('Y-m-d', strtotime($product->created_at)) }}</p>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>

                            <!-- Product stock -->
                            <div class="mt-3">
                                <h4><span class="badge {{ $product->quantity > 0 ? 'badge-success-lighten' : 'badge-danger-lighten' }}">{{ $product->quantity > 0 ? 'Instock' : 'Outstock' }}</span></h4>
                            </div>

                            <!-- Product description -->
                            <div class="mt-4">
                                <h6 class="font-14">Retail Price:</h6>
                                <h3>BDT{{ $product->price }}</h3>
                                <h6 class="font-14">Discount:</h6>
                                <h3>{{ $product->discount }}%</h3>
                            </div>

                            <!-- Product description -->
                            <div class="mt-4">
                                <h6 class="font-14">Description:</h6>
                                <p>{!! $product->description !!}</p>
                            </div>

                            <!-- Product information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="font-14">Available Stock:</h6>
                                        <p class="text-sm lh-150">{{ $product->quantity }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Number of Orders:</h6>
                                        <p class="text-sm lh-150">5,458</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Revenue:</h6>
                                        <p class="text-sm lh-150">$8,57,014</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

@endsection

@section('script')

@endsection
