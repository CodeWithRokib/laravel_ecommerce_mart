@extends('front.master')

@section('title')
    Wish
@endsection

@section('style')

@endsection

@section('body')

    <!-- Products Start -->
     <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-3">
                <a href="{{ route('home.index') }}" style="color: black">Home</a>/<a class="active" style="color: gray">Wish</a>
            </div>
        </div>
        <div class="row px-xl-5 pb-3 pt-5">
        @if ($wishCount > 0)
        @foreach ($wishs as $wish)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{ asset($wish->image) }}" alt="" style="height:25rem">
                        </div>
                        <div class="buttons">
                        <form action="{{ route('wish.delete') }}" method="DELETE">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $wish->id }}">
                            <button type="submit" class="btn abt btn-sm text-danger" data-bind=""><i class="fa fa-trash" style="font-size: 22px;"></i></button>
                        </form>
                    </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{ $wish->name }}</h6>
                            <div class="d-flex justify-content-center">
                            @if ($wish->discount)
                                <h6>BDT{{ $wish->price - ($wish->price * ($wish->discount / 100)) }}</h6><h6 class="text-muted ml-2"><del>BDT{{ $wish->price }}</del></h6>
                                @else
                                <h6>BDT{{ $wish->price }}</h6>
                            @endif
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center bg-light border">
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $wish->id }}">
                                <input type="hidden" name="product_name" value="{{ $wish->name }}">
                                @if ($wish->discount)
                                <input type="hidden" name="price" value="{{ $wish->price - ($wish->price * ($wish->discount / 100)) }}">
                                @else
                                <input type="hidden" name="price" value="{{ $wish->price }}">
                                @endif
                                <input type="hidden" name="quantity" value="1">
                                <a href="{{ route('single.product.show', $wish->id) }}" class="btn btn-sm text-dark pr-5"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <button type="submit" class="btn btn-sm text-dark pl-3"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

                        @else
                        <h2>No product added to wish list</h2>
                    @endif
            
        </div>
    </div>
    <!-- Products End -->
@endsection

@section('script')

@endsection
