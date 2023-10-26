@extends('admin.master')

@section('title')
    Shipping
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
                    <li class="breadcrumb-item active">Shipping</li>
                </ol>
            </div>
            <h4 class="page-title">Shipping List</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@if(Session::has('status'))
                <div class="alert-success alert">{{Session::get('status')}}</div>
 @endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Shipping List</strong>
                <span class="ms-auto" style="float: right"><a href={{route('shipping.show')}} class="btn btn-primary">Add Shipping</a></span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                    @foreach ($shippings as $shipping)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td class="text-wrap">{{ $shipping->product_name }}</td>
                            <td class="text-wrap">{{ $shipping->price }}</td>
                            
                            <td class="text-wrap">{{ $shipping->status }}</td>
                            
                             <td>
                                <a href={{route('shipping.delete',$shipping->id)}}
                                    class="btn btn-danger btn-sm deletebtn" >
                                    <i class="fas fa-trash">Delete</i>
                                </a>
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
