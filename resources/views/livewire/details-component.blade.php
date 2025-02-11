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
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span> {{__('mycustom.products')}}
                    <span></span> {{__('mycustom.details')}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="product image">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Follow Us</strong></li>
                                            <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->name }}</h2>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">{{ $product->sale_price }} {{__('mycustom.LE')}}</span></ins>
                                                <ins><span class="old-price font-md ml-15">{{ $product->regular_price }} {{__('mycustom.LE')}}</span></ins>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        
                                        <div class="short-desc mb-30">
                                            <p>{{__('mycustom.phone')}}: {{ $product->phone }}</p>
                                        </div>


                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        {{-- <div class="detail-extralink">
                                            @php
                                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                                            @endphp
                                            <div class="product-extra-link2">
                                                <button type="button" class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }} )">{{__('mycustom.addtocart')}}</button>
                                                @if ($witems->contains($product->id))
                                                    <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#nav-tab-three" wire:click.prevent="removeFromWishlist({{ $product->id }})"><i class="fi-rs-heart"></i></a>
                                                @else
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#nav-tab-three" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fi-rs-heart"></i></a>
                                                @endif
                                            </div>
                                        </div> --}}
                                        <!--<ul class="product-meta font-xs color-grey mt-50">-->
                                        <!--    <li class="mb-5">SKU: <a href="#">'{{ $product->SKU }}'</a></li>-->
                                        <!--    <li>Availability:<span class="in-stock text-success ml-5">{{ $product->quantity }} {{__('mycustom.itemsinstock')}}</span></li>-->
                                        <!--</ul>-->
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">{{__('mycustom.description')}}</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            {{ $product->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">{{__('mycustom.new')}} {{__('mycustom.products')}}</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nproducts as $nproduct)
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/products')}}/{{$nproduct->image}}" alt="{{ $nproduct->name }}" width="120" height="120">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="{{ route('product.details',['slug'=>$nproduct->slug]) }}">{{ $nproduct->name }}</a></h5>
                                    <p class="price mb-0 mt-5">{{$nproduct->sale_price}} {{__('mycustom.LE')}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
