@extends('front.master')

@section('title')
    Show Product
@endsection

@section('style')

<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rate:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
        }
        .rate:not(:checked) > label:before {
        content: '★ ';
        }
        .rate > input:checked ~ label {
        color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
        .star-rating-complete{
           color: #c59b08;
        }
        .rating-container .form-control:hover, .rating-container .form-control:focus{
        background: #fff;
        border: 1px solid #ced4da;
        }
        .rating-container textarea:focus, .rating-container input:focus {
        color: #000;
        }         .rated {
        float: left;
        height: 46px;
        padding: 0 10px;
        }
        .rated:not(:checked) > input {
        position:absolute;
        display: none;
        }
        .rated:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ffc700;
        }
        .rated:not(:checked) > label:before {
        content: '★ ';
        }
        .rated > input:checked ~ label {
        color: #ffc700;
        }
        .rated:not(:checked) > label:hover,
        .rated:not(:checked) > label:hover ~ label {
        color: #deb217;
        }
        .rated > input:checked + label:hover,
        .rated > input:checked + label:hover ~ label,
        .rated > input:checked ~ label:hover,
        .rated > input:checked ~ label:hover ~ label,
        .rated > label:hover ~ input:checked ~ label {
        color: #c59b08;
        }
</style>
@endsection

@section('body')

     <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5" style="background-color: #EDF1FF;">
    
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5" id="img-container">
                <img src="{{ asset($product->image) }}" class="img-fluid w-100"
                
                />
                
        </div>

        <div class="col-lg-7 pb-5 product_dell">
            <h3 class="font-weight-semi-bold">{{ $product->name }}</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            @if ($product->discount)
                <h6>BDT{{ $product->price - ($product->price * ($product->discount / 100)) }}</h6><h6 class="text-muted ml-2"><del>BDT{{ $product->price }}</del></h6>
                @else
                <h6>BDT{{ $product->price }}</h6>
            @endif
            <div class="availability">
                <b class="stock-title">Availability: </b>
                <span class="badge {{ $product->quantity > 0 ? 'badge-success-lighten' : 'badge-danger-lighten' }}">{{ $product->quantity > 0 ? 'Instock' : 'Outstock' }}</span>
            </div>
            <div class="product-short-text mb-3" data-bind="">
                    <div data-bind="">Code: {{ $product->code }}</div>
            </div>

            <div class="wishlist-sku" data-bind="">
                <div class="pwishlistbtn">
                    <form action="{{ route('wish.store', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn abt btn-sm text-dark" data-bind=""><i class="fa fa-heart"></i>&nbsp;Add to wishlist</button>
                    </form>
                </div>
                <div class="sku" data-bind="">
                    <label>SKU:</label> <span class="stock" data-bind="text: sku">{{ $product->sku }}</span>
                </div>
            </div>

            <div class="d-flex align-items-center mb-4 pt-2 position_none">
                <form action="{{ route('cart.store') }}" method="POST" class="cart">
                    @csrf
                    <div class="input-group quantity mr-3">
                        <input type="number" size="4" class="form-control qty text mb-2" title="Qty" value="1" name="quantity" min="1" step="1">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            @if ($product->discount)
                                <input type="hidden" name="price" value="{{ $product->price - ($product->price * ($product->discount / 100)) }}">
                                @else
                                <input type="hidden" name="price" value="{{ $product->price }}">
                            @endif
                    </div>
                    <button class="btn btn-primary"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                    {{-- <input type="submit" value="Add To Cart"> --}}
                </form>

            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    @php
                    $socials = App\Models\Social::where('status', 1)->get();
                @endphp
                @foreach ($socials as $social)
                    <a class="text-dark px-2" href="{{ $social->link }}">
                        <i class="{{ $social->icon }}"></i>
                    </a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Information</a>
                @php
                    $reviews = App\Models\Review::where('product_id', $product->id)->get();
                    $review_count = count($reviews);
                @endphp
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews ({{ $review_count }})</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                   <p>{!! $product->description !!}</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Additional Information</h4>
                    <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                        <h4 class="mb-4">{{ $review_count }} review for "{{ $product->name }}"</h4>
                            <!-- 
                            <div class="media mb-4">
                                <div class="media-body">
                                    @foreach ($reviews as $review)
                                    <h6>{{ $review->user_name }}<small> - <i>{{ $review->created_at->format('y-m-d') }}</i></small></h6>
                                    <div class="rated">
                                        @for($i=1; $i<=$review->rating; $i++)
                                          <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                        @endfor
                                        </div>
                                    <p>{{ $review->review }}</p>
                                    @endforeach
                                </div>
                            </div> -->
                            <div class="row d-flex">
                            <div class="col-lg-6">
                                    <div class="comment-widgets">
                                    @foreach ($reviews as $review)
                                        <!-- Comment Row -->
                                        <div class="d-flex flex-row comment-row mb-2">
                                            <div class="p-2"><img src="https://i.imgur.com/Ur43esv.jpg" alt="user" width="50" class="rounded-circle"></div>
                                            <div class="comment-text w-100">
                                                <h6 class="font-medium">{{ $review->user_name }}</h6> <span class="m-b-15 d-block">{{ $review->review }} </span>
                                                <div class="comment-footer"> <span class="text-muted float-right">{{ $review->created_at->format('D-m-Y') }}</span> <div class="rated">
                                        @for($i=1; $i<=$review->rating; $i++)
                                          <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                        @endfor
                                        </div></div>
                                            </div>
                                        </div> <!-- Comment Row -->
                                        <hr/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
    
      
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Leave a review</h4>
                            <form action="{{ route('review.store') }}" method="POst">
                                @csrf
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Your Review *</label>
                                    <textarea id="message" cols="30" rows="5" name="review" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" name="user_name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email *</label>
                                    <input type="email" class="form-control" name="user_email" id="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->

 <!-- Products Start -->
 <div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                @php
                    $datas = DB::table('products')->where('category_id', $product->category_id)->get();
                    // return $datas;
                @endphp
                @foreach ($datas as $key => $data)
                <div class="card product-item border-0 @if($key == 0) active @endif">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset($data->image) }}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $data->name }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>BDT{{ $product->price - ($product->price * ($product->discount / 100)) }}</h6><h6 class="text-muted ml-2"><del>BDT{{ $product->price }}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
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
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
