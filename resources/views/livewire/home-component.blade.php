<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .wishlisted{
            background-color: #F15412 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color: #fff !important;
        }
        .default-img {
            width: 180px;
            height: 200px; /* Default height */
        }
        @media only screen and (max-width: 768px) {
            .default-img {
              height: 120px; 
            }
        }
    </style>

<main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach ($slides as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                        <div class="container">
                            <div class="row align-items-center slider-animated-1">
                                <!--<div class="col-lg-5 col-md-6">-->
                                <!--    <div class="hero-slider-content-2">-->
                                <!--        <h4 class="animated">{{ $slide->top_title }}</h4>-->
                                <!--        <h2 class="animated fw-900">{{ $slide->title }}</h2>-->
                                <!--        <h1 class="animated fw-900 text-brand">{{ $slide->sub_title }}</h1>-->
                                <!--        <p class="animated">{{ $slide->offer }}</p>-->
                                <!--        <a class="animated btn btn-brush btn-brush-3" href="{{ $slide->link }}"> {{__('mycustom.shopnow')}} </a>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-lg-12 col-md-12">
                                    <a href="{{ $slide->link }}">
                                        <div class="single-slider-img">
                                            <img class="animated slider-1-1" src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" alt="{{ $slide->title }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow" id="helwanguide"></div>
        </section>
        <section class="featured section-padding position-relative" id="ourproducts">
            <div class="container">
                <!--helwanguide-->
                <h3 class="section-title mb-20 wow fadeIn animated"><span>{{__('mycustom.helwan')}}</span> {{__('mycustom.guide')}}</h3>
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('offer')}}"><img src="{{asset('assets/imgs/theme/icons/helwan.png')}}" alt=""></a>
                            <h4 class="bg-5"> عروض و خصومات </h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('cafesandrestaurants')}}"><img src="{{asset('assets/imgs/theme/icons/feature-5.png')}}" alt=""></a>
                            <h4 class="bg-5">{{__('mycustom.cafesandrestaurants')}}</h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('clinicsandhospitals')}}"><img src="{{asset('assets/imgs/theme/icons/feature-1.png')}}" alt=""></a>
                            <h4 class="bg-1"> الصحة </h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('mallsandstores')}}"><img src="{{asset('assets/imgs/theme/icons/feature-6.png')}}" alt=""></a>
                            <h4 class="bg-6">{{__('mycustom.mallsandstores')}}</h4>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('online')}}"><img src="{{asset('assets/imgs/theme/icons/helan.png')}}" alt=""></a>
                            <h4 class="bg-5"> اونلاين </h4>
                        </div>
                    </div>
                    
                    {{-- <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('vegetableexchange')}}"><img src="{{asset('assets/imgs/theme/icons/feature-3.png')}}" alt=""></a>
                            <h4 class="bg-2">{{__('mycustom.vegetableexchange')}}</h4>
                        </div>
                    </div> --}}
                    
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('kindergartensandschools')}}"><img src="{{asset('assets/imgs/theme/icons/feature-2.png')}}" alt=""></a>
                            <h4 class="bg-3">{{__('mycustom.kindergartensandschools')}}</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('cars')}}"><img src="{{asset('assets/imgs/theme/icons/icon-15.jpg')}}" alt=""></a>
                            <h4 class="bg-6"> السيارات </h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <a href="{{route('maintenanceandservices')}}"><img src="{{asset('assets/imgs/theme/icons/feature-4.png')}}" alt=""></a>
                            <h4 class="bg-4">{{__('mycustom.maintenanceandservices')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">{{__('mycustom.featured')}}</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li> --}}
                        <!--<li class="nav-item" role="presentation">-->
                        <!--    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">{{__('mycustom.newadded')}}</button>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a href="{{ route('admin.product.add') }}" class="nav-link">{{__('mycustom.addnewproduct')}}</a>
                        </li>
                    </ul>
                    <a href="{{ route('shop') }}" class="view-more d-none d-md-flex">{{__('mycustom.viewmore')}}<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach ($fproducts as $fproduct)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('product.details' ,['slug'=>$fproduct->slug]) }}">
                                                    <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$fproduct->image}}" alt="" width="180">
                                                    {{-- <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""> --}}
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a> -->
                                                {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a> --}}
                                            </div>

                                        </div>
                                        <div class="product-content-wrap">
                                            {{-- <div class="product-category">
                                                <a href="shop.html">Clothing</a>
                                            </div> --}}
                                            <h2><a href="{{ route('product.details' ,['slug'=>$fproduct->slug]) }}">{{ $fproduct->name }}</a></h2>

                                            <div class="product-price">
                                                <span>{{ $fproduct->sale_price }} {{__('mycustom.LE')}}</span>
                                            <span class="old-price">{{ $fproduct->regular_price }} {{__('mycustom.LE')}}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                            <!--@if ($witems->contains($fproduct->id))-->
                                            <!--    <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $fproduct->id }})"><i class="fi-rs-heart"></i></a>-->
                                            <!--@else-->
                                            <!--    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i class="fi-rs-heart"></i></a>-->
                                            <!--@endif-->
                                                <!--<a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{ $fproduct->id }},'{{ $fproduct->name }}',{{ $fproduct->regular_price }})"><i class="fi-rs-shopping-bag-add"></i></a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->

                    <!--<div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">-->
                    <!--    <div class="row product-grid-4">-->
                    <!--        @php-->
                    <!--            $witems = Cart::instance('wishlist')->content()->pluck('id');-->
                    <!--        @endphp-->
                    <!--        @foreach ($lproducts as $lproduct)-->
                    <!--            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">-->
                    <!--                <div class="product-cart-wrap mb-30">-->
                    <!--                    <div class="product-img-action-wrap">-->
                    <!--                        <div class="product-img product-img-zoom">-->
                    <!--                            <a href="{{ route('product.details' ,['slug'=>$lproduct->slug]) }}">-->
                    <!--                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$lproduct->image}}" alt="" width="180" height="220">-->
                    <!--                                {{-- <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""> --}}-->
                    <!--                            </a>-->
                    <!--                        </div>-->
                    <!--                        <div class="product-action-1">-->
                    <!--                            {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>-->
                    <!--                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>-->
                    <!--                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> --}}-->
                    <!--                        </div>-->

                    <!--                    </div>-->
                    <!--                    <div class="product-content-wrap" id="1product">-->
                    <!--                        {{-- <div class="product-category">-->
                    <!--                            <a href="shop.html">Music</a>-->
                    <!--                        </div> --}}-->
                    <!--                        <h2><a href="{{ route('product.details' ,['slug'=>$lproduct->slug]) }}">{{ $lproduct->name }}</a></h2>-->

                    <!--                        <div class="product-price">-->
                    <!--                            <span>{{ $lproduct->sale_price }} {{__('mycustom.LE')}}</span>-->
                    <!--                        <span class="old-price">{{ $lproduct->regular_price }} {{__('mycustom.LE')}}</span>-->
                    <!--                        </div>-->
                    <!--                        <div class="product-action-1 show">-->
                                            <!--@if ($witems->contains($lproduct->id))-->
                                            <!--    <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#nav-tab-three" wire:click.prevent="removeFromWishlist({{ $lproduct->id }})"><i class="fi-rs-heart"></i></a>-->
                                            <!--@else-->
                                            <!--    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#nav-tab-three" wire:click.prevent="addToWishlist({{ $lproduct->id }},'{{ $lproduct->name }}',{{ $lproduct->regular_price }})"><i class="fi-rs-heart"></i></a>-->
                                            <!--@endif-->
                    <!--                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{ $lproduct->id }},'{{ $lproduct->name }}',{{ $lproduct->regular_price }})"><i class="fi-rs-shopping-bag-add"></i></a>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        @endforeach-->
                    <!--    </div>-->
                        <!--End product-grid-4-->
                    <!--</div>-->
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>

        <section class="banner-2 section-padding pb-0" id="categories">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">{{__('mycustom.helwanstore')}}</h4>
                        <h1 class="fw-600 mb-20">{{__('mycustom.yourwayto')}} <br>{{__('mycustom.worldofshopping')}}</h1>
                        <a href="{{ route('shop') }}" class="btn">{{__('mycustom.shopnow')}}... <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-categories section-padding mt-15 mb-25" id="newarrivals">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>{{__('mycustom.popular')}}</span> {{__('mycustom.popularcategories')}}</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach ($pcategories as $pcategory)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{ route('product.category',['slug'=>$pcategory->slug]) }}"><img src="{{ asset('assets/imgs/categories') }}/{{ $pcategory->image }}" alt="{{ $pcategory->name }}"></a>
                                </figure>
                                <h5><a href="{{ route('product.category',['slug'=>$pcategory->slug]) }}">{{ $pcategory->name }}</a></h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>{{__('mycustom.new')}}</span> {{__('mycustom.arrivals')}}</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach ($lproducts as $lproduct)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('product.details' ,['slug'=>$lproduct->slug]) }}">
                                            <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$lproduct->image}}" alt="" width="180" height="150">
                                            {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <i class="fi-rs-eye"></i></a> -->
                                        {{-- <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a> --}}
                                    </div>

                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="product-details.html">{{ $lproduct->name }}</a></h2>

                                    <div class="product-price">
                                        <span>{{ $lproduct->sale_price }} {{__('mycustom.LE')}}</span>
                                            <span class="old-price">{{ $lproduct->regular_price }} {{__('mycustom.LE')}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="section-padding">-->
        <!--    <div class="container">-->
        <!--        <h3 class="section-title mb-20 wow fadeIn animated"><span>{{__('mycustom.featuredbrands')}}</span> {{__('mycustom.brands')}}</h3>-->
        <!--        <div class="carausel-6-columns-cover position-relative wow fadeIn animated">-->
        <!--            <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>-->
        <!--            <div class="carausel-6-columns text-center" id="carausel-6-columns-3">-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-7.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-9.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-10.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-11.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-12.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-13.png" alt="">-->
        <!--                </div>-->
        <!--                <div class="brand-logo">-->
        <!--                    <img class="img-grey-hover" src="assets/imgs/banner/brand-14.png" alt="">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

    </main>

</div>
