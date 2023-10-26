@extends('front.master')

@section('title')
    Home
@endsection

@section('style')
    <style>
        .abt{
            display: inherit;
            color: #D19C97;
            text-decoration: none;
            background-color: transparent;
            margin-left: -15px;
        }
        .abt i{
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            line-height: 37px;
            margin-bottom: 5px;
            transition: all 0.5s ease;
            text-align: center;
            justify-content: center;
            width: 35px !important;
            height: 35px !important;
            background: #FF0BAC;
        }
    </style>
@endsection

@section('slider')
    @include('front.includes.slider')
@endsection

@section('body')

    <section class="home-category section-padding mt-5">
        <div class="section-header">
            <h1>Products That Change Lives</h1>
            <div class="header-style"></div>
            <p>Bangladesh- millions of entrepreneurs, billions of products</p>
        </div>
        <div class="container-fluid mb-0">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="category-box">
                                <a href="">
                                    <div class="photo">
                                        <img class="img-responsive ls-is-cached lazyloaded" src="{{ asset('/') }}front/assets/img/product1.jpg" alt="click and buy">
                                    </div>
                                    <div class="text ct1">click and buy</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="category-box">
                                <a href="">
                                    <div class="photo">
                                        <img class="img-responsive ls-is-cached lazyloaded" src="{{ asset('/') }}front/assets/img/product2.jpg" alt="Clay Ceramics">
                                    </div>
                                    <div class="text ct2">Clay Ceramics</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="category-box middle-category-box">
                                <a href="">
                                    <div class="photo">
                                        <img class="img-responsive ls-is-cached lazyloaded" src="{{ asset('/') }}front/assets/img/product3.jpg" alt="Nakshi Kantha">
                                    </div>
                                    <div class="text ct3">Nakshi Kantha</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="category-box">
                                <a href="">
                                    <div class="photo">
                                        <img class="img-responsive ls-is-cached lazyloaded" src="{{ asset('/') }}front/assets/img/product4.jpg" alt="Bags And Accessories">
                                    </div>
                                    <div class="text ct4">Bags And Accessories</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="category-box">
                                <a href="">
                                    <div class="photo">
                                        <img class="img-responsive ls-is-cached lazyloaded" src="{{ asset('/') }}front/assets/img/product5.jpg" alt="Floor Mat &amp; Rugs">
                                    </div>
                                    <div class="text ct5">Floor Mat &amp; Rugs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Start -->
    <section class="home-about-us section-padding">
        <div class="section-header">
            <h2>About Us</h2>
            <div class="header-style"></div>
            @if(isset($company->about) && !empty($company->about))
            <p>{!! $company->about !!}</p>
            @else
            <div> </div>
            @endif
            
        </div>
    </section>
   <!-- About End -->



    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt="" style="height:25rem">
                    </div>
                    <div class="buttons">
                        <form action="{{ route('wish.store', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <a href="{{ route('single.product.show', $product->id) }}" class="hidden-xs" data-bind="" title="Quick view"><i class="fa fa-eye"></i></a>
                        <button type="submit" class="btn abt btn-sm text-dark pl-3" data-bind="" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                        </form>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                        <div class="d-flex justify-content-center">
                            @if ($product->discount)
                                <h6>BDT{{ $product->price - ($product->price * ($product->discount / 100)) }}</h6><h6 class="text-muted ml-2"><del>BDT{{ $product->price }}</del></h6>
                                @else
                                <h6>BDT{{ $product->price }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center align-items-center bg-light border">
                        <form action="{{ route('cart.store') }}" class="" method="POST">
                            @csrf

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            @if ($product->discount)
                                <input type="hidden" name="price" value="{{ $product->price - ($product->price * ($product->discount / 100)) }}">
                                @else
                                <input type="hidden" name="price" value="{{ $product->price }}">
                            @endif
                            <input type="hidden" name="quantity" value="1">
                            <a href="{{ route('single.product.show', $product->id) }}" class="btn btn-sm text-dark pr-5"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <button type="submit" class="btn btn-sm text-dark pl-3"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->

	<section class="section-count">
		<!-- Subscribe Start -->
		<div class="container-fluid  my-5">
	        <!------ Include the above in your HEAD tag ---------->
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="12000000" data-speed="1500"></h2>
                        <p class="count-text ">CMSME Entrepreneurs' Online Market</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-coffee fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="36000000" data-speed="1500"></h2>
                        <p class="count-text ">Livelihood Impacted</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-coffee fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="750225" data-speed="1500"></h2>
                        <p class="count-text ">National And International Buyers Served</p>
                    </div>
                </div>
                    <div class="col">
                        <div class="counter">
                        <i class="fa fa-bug fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="1500500" data-speed="1500"></h2>
                        <p class="count-text ">Genuine Bangladeshi Products Served</p>
                    </div>
                    </div>
            </div>
		</div>
	</section>
    <!-- Subscribe End -->

    <div class="section-header">
        <h2 style="color: black">CMSME | EMPOWER | IMPACT</h2>
        <div class="header-style"></div>
        <p></p>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-sm-6 col-xs-12">
                <div class="page-box">
                    <div class="photo">
                        <img class="ls-is-cached lazyloaded" src="{{ asset($blog->image) }}" alt="page" style="height: 22rem;
    width: 100%;">
                        <!--<a href="/">-->

                        <!--</a>-->
                    </div>
                    <div class="text">
                        <!--<h3><a href="/">Shopping Ethically</a></h3>-->
                        <h3>{{ $blog->title }}</h3>
                        <p>{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Just Arrived</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @foreach ($desproducts as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt="" style="height:25rem">
                    </div>
                    <div class="buttons">
                        <form action="{{ route('wish.store', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <a href="{{ route('single.product.show', $product->id) }}" class="hidden-xs" data-bind="" title="Quick view"><i class="fa fa-eye"></i></a>
                        <button type="submit" class="btn abt btn-sm text-dark pl-3" data-bind="" title="Add to wishlist"><i class="fa fa-heart"></i></button>
                        </form>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                        <div class="d-flex justify-content-center">
                            @if ($product->discount)
                                <h6>BDT{{ $product->price - ($product->price * ($product->discount / 100)) }}</h6><h6 class="text-muted ml-2"><del>BDT{{ $product->price }}</del></h6>
                                @else
                                <h6>BDT{{ $product->price }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center align-items-center bg-light border">
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            @if ($product->discount)
                                <input type="hidden" name="price" value="{{ $product->price - ($product->price * ($product->discount / 100)) }}">
                                @else
                                <input type="hidden" name="price" value="{{ $product->price }}">
                            @endif
                            <input type="hidden" name="quantity" value="1">
                            <a href="{{ route('single.product.show', $product->id) }}" class="btn btn-sm text-dark pr-5"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <button type="submit" class="btn btn-sm text-dark pl-3"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Products End -->
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

@endsection

@section('script')

@endsection
