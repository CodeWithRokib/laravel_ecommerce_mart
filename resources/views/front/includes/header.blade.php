@php
    $company = App\Models\Company::first();
    $banners = App\Models\Banner::where('status', 1)->get();
    $cart = App\Models\Cart::where('user_id', Auth::id())->count();
    $wishCount = App\Models\Wish::where('user_id', Auth::id())->count();
@endphp

<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
            @if (isset($company->phone))
            <a class="text-dark" href=""><i class="fa fa-phone-alt"></i> Call us: {{ $company->phone }}</a>
                    @else
                        <div> </div>
                    @endif
                
                <span class="text-muted px-2">|</span>
                @if (isset($company->email))
                <a class="text-dark" href="">Text us:    {{ $company->email }} </a>
                    @else
                    <div> </div>
                    @endif
                
                
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
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
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{ route('home.index') }}" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for products">
                    <div class="input-group-append">
                        <button class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if (Auth::check())
        <div class="col-lg-3 col-6 text-right">
            <a href="{{ route('wish.index') }}" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                    <span class="badge">
                    @if ($wishCount > 0)
                        {{ $wishCount }}
                        @else
                        0
                    @endif
                    </span>
            </a>
            <a href="{{ route('cart.index') }}" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">
                    @if ($cart > 0)
                        {{ $cart }}
                        @else
                        0
                    @endif
                </span>
            </a>
        </div>
        @else
                            
        <div class="col-lg-3 col-6 text-right">
            <a href="#" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                    <span class="badge">
                    @if ($wishCount > 0)
                        {{ $wishCount }}
                        @else
                        0
                    @endif
                    </span>

            </a>
            <a href="#" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">
                    @if ($cart > 0)
                        {{ $cart }}
                        @else
                        0
                    @endif
                </span>
            </a>
        </div>
    @endif

    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid mb-0">
    <div class="row border-top px-xl-5">
        <div class="col-lg-12">
            <nav class="fixed-nav navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{ route('home.index') }}" class="text-decoration-none d-block d-lg-none">
                    @if (isset($company->logo))
                        <img src="{{ asset($company->logo) }}" alt="" class="img-fluid" style="width: 100px; height: 50px;">
                    @else
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    @endif
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        @php
                            $categories = App\Models\Category::where('status', 1)->get();
                        @endphp
                        @foreach ($categories as $category)
                            <div class="nav-item menu-large dropdown dropdown1">
                                <a href="{{ route('categoryProduct', $category->id) }}" class="nav-link  dropdown-toggle"  data-toggle="dropdown" aria-expanded="false">{{ $category->name }}</a>

                                <ul class="dropdown-menu megamenu rounded-0 m-0">
                                    <li>
                                        <div class="">
                                            @foreach ($category->subCategory as $subCategory)
                                            <div class="mega-sub">
                                                <div class="mega-sub-title">{{ $subCategory->name }}</div>
                                                <ul>
                                                    @foreach ($subCategory->subSubCategory as $subSubCategory)
                                                    <li ><a class="text-info fw-bold font-italic" href="{{ route('subCategoryProduct', $subSubCategory->id) }}">{{ $subSubCategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        @if (Auth::check())
                            {{-- <a href="{{ route('user.dashboard') }}" class="nav-item nav-link">Dashboard</a>
                            <a href="{{ route('user.profile') }}" class="nav-item nav-link">Profile</a>
                            <a href="{{ route('user.order') }}" class="nav-item nav-link">Order</a>
                            <a href="{{ route('user.wishlist') }}" class="nav-item nav-link">Wishlist</a>
                            <a href="{{ route('user.cart') }}" class="nav-item nav-link">Cart</a>
                            <a href="{{ route('user.checkout') }}" class="nav-item nav-link">Checkout</a> --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"  class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                            @else
                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                        @endif
                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>
<!-- Navbar End -->
