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
                    <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span> {{__('mycustom.shop')}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                               <p> {{__('mycustom.wefound')}} <strong class="text-brand">{{ $products->total() }}</strong> {{__('mycustom.itemforyou')}} {{__('mycustom.from')}} <strong class="text-brand">{{ $category_name }}</strong></p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>{{__('mycustom.show')}}:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> {{ $pageSize }} <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="{{ $pageSize == 12 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(12)">12</a></li>
                                            <li><a class="{{ $pageSize == 15 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(15)">15</a></li>
                                            <li><a class="{{ $pageSize == 25 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(25)">25</a></li>
                                            <li><a class="{{ $pageSize == 32 ? 'active': '' }}" href="#" wire:click.prevent="changePageSize(32)">32</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>{{__('mycustom.sortby')}}:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> {{ $orderBy }} <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="{{ $orderBy == 'Default Sorting' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Default Sorting')">{{__('mycustom.defaultsorting')}}</a></li>
                                            <li><a class="{{ $orderBy == 'Price: Low to High' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Price: Low to High')">{{__('mycustom.lowtohigh')}}</a></li>
                                            <li><a class="{{ $orderBy == 'Price: High to Low' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Price: High to Low')">{{__('mycustom.hightolow')}}</a></li>
                                            <li><a class="{{ $orderBy == 'Sort By Newness' ? 'active': '' }}" href="#" wire:click.prevent="changeOrderBy('Sort By Newness')">{{__('mycustom.newness')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach ($products as $product)
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ route('product.details' ,['slug'=>$product->slug]) }}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{ ($product->name) }}" width="180" height="250">
                                                {{-- <img class="hover-img" src="{{ asset('assets/imgs/shop/product-')}}{{ $product->id }}-2.jpg" alt="{{ ($product->name) }}"> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a> --}}
                                        </div>

                                    </div>

                                    <div class="product-content-wrap">
                                        {{-- <div class="product-category">
                                            <a href="#">{{ $category->name }}</a>
                                        </div> --}}
                                        <h2><a href="product-details.html">{{ $product->name }}</a></h2>

                                        <div class="product-price">
                                            <span>${{ $product->regular_price }} </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            @if ($witems->contains($product->id))
                                                <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{ $product->id }})"><i class="fi-rs-heart"></i></a>
                                            @else
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fi-rs-heart"></i></a>
                                            @endif
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{ $products->links() }}
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">{{__('mycustom.categories')}}</h5>
                            <ul class="categories">
                                @foreach ($categories as $category)
                                <li><a href="{{ route('product.category',['slug'=>$category->slug] )}}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">{{__('mycustom.fillterbyprice')}}</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range" wire:ignore></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span> <span class="text-info">${{ $min_value }}</span> - <span class="text-info">${{ $max_value }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a> --}}
                        </div>
                        <!-- Product sidebar Widget -->
                        {{-- <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/shop/thumbnail-3.jpg')}}" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="product-details.html">Chen Cardigan</a></h5>
                                    <p class="price mb-0 mt-5">$99.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/shop/thumbnail-4.jpg')}}" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="product-details.html">Chen Sweater</a></h6>
                                    <p class="price mb-0 mt-5">$89.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:80%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/shop/thumbnail-5.jpg')}}" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="product-details.html">Colorful Jacket</a></h6>
                                    <p class="price mb-0 mt-5">$25</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@push('scripts')
    <script>
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 0,
                max: 10000,
                values: [0, 10000],
                slide: function(event, ui) {
                    // amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
                    @this.set('min_value',ui.values[0]);
                    @this.set('max_value',ui.values[1]);
                }
            });
        });
    </script>
@endpush
