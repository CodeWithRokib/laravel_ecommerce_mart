@php
    $company = App\Models\Company::first();
    $categories = App\Models\Category::where('status', 1)->get();
    $subCategories = App\Models\SubCategory::where('status', 1)->get();
@endphp

<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <!--@if (isset($company->logo))
                    <img src="{{ asset($company->logo) }}" alt="" class="img-fluid" style="width: 100px; height: 50px;">
                @else
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                @endif-->
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
            @if(isset($company) && !empty($company))
            <p>{!! $company->about !!}</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{ $company->street }}, {{ $company->city }}, {{ $company->country }}</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{ $company->email }}</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{ $company->phone }}</p>
            @else
            <div> </div>
            @endif
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @foreach ($categories as $category)
                        <a class="text-dark mb-2" href="{{ route('categoryProduct', $category->id) }}"><i class="fa fa-angle-right mr-2"></i>{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        @foreach ($subCategories as $subCategory)
                        <a class="text-dark mb-2" href="{{ route('subCategoryProduct', $subCategory->id) }}"><i class="fa fa-angle-right mr-2"></i>{{ $subCategory->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">EvaTechnology.info</a>. All Rights Reserved. Develop
                by
                <a class="text-dark font-weight-semi-bold" href="https://evatechnology.info">EVA TECH</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="{{ asset('/') }}front/assets/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->
