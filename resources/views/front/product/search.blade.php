@extends('front.master')

@section('title')
    Search
@endsection

@section('style')
    
@endsection

@section('body')
       <!-- Products Start -->
       <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
					<div class="col-lg-2">
						<nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
							<div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                                @foreach ($categories as $category)
                                <div class="nav-item dropdown sub-menu">
                                    
									<a href="{{ route('categoryProduct', $category->id) }}" class="nav-link " data-toggle="dropdown">{{ $category->name }}  <i class="fa fa-angle-down float-right mt-1 ml-4"></i></a>
									<div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                        @foreach ($subcategories as $subcategory)
                                        @if ($category->id == $subcategory->category_id)
										<a href="{{ route('subCategoryProduct', $subcategory->id) }}" class="dropdown-item">{{ $subcategory->name }} </a>
                                        @endif
                                        @endforeach
									</div>
								</div>
                                @endforeach
							</div>
						</nav>
					</div>
                    <div class="col-lg-10 row">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="{{ asset($product->image) }}" alt="">
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
			</div>
		</div>
    </div>
    <!-- Products End -->
@endsection

@section('script')
    
@endsection