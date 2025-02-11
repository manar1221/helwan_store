<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>{{__('mycustom.helwanstore')}}</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/logo/logo.png')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
@livewireStyles
</head>

<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#">العربية</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
                                <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}  /
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{__('mycustom.logout')}}</a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">{{__('mycustom.login')}} </a>  / <a href="{{ route('register') }}">{{__('mycustom.signup')}}</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="active" href="{{ route('home.index') }}#categories">
                                <span class="fi-rs-apps"></span> {{__('mycustom.browsecategories')}}
                            </a>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="/">{{__('mycustom.home')}} </a></li>
                                    <li><a href="{{ route('shop') }}">{{__('mycustom.shop')}}</a></li>
                                    <li><a href="{{ route('home.index') }}#newarrivals">{{__('mycustom.newarrivals')}}</a></li>
                                    <li><a href="{{ route('blog') }}">{{__('mycustom.blogs')}}</a></li>
                                    <li><a href="{{ route('home.index') }}#ourproducts"> {{__('mycustom.ourproducts')}}</a></li>
                                    <li><a href="#footer">{{__('mycustom.contact')}}</a></li>
                                    @auth
                                    <li><a href="#">{{__('mycustom.myaccount')}}<i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                {{-- <li><a href="{{ route('admin.dashbord') }}">Dashboard</a></li> --}}
                                                <li><a href="{{ route('admin.products') }}">{{__('mycustom.products')}}</a></li>
                                                <li><a href="{{ route('admin.blogs') }}">{{__('mycustom.blogs')}}</a></li>
                                                <li><a href="{{ route('admin.categories') }}">{{__('mycustom.categories')}}</a></li>
                                                <li><a href="{{ route('admin.home.slider') }}">{{__('mycustom.slider')}}</a></li>
                                            </ul>
                                        @elseif (Auth::user()->utype == 'PRD')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.products') }}">{{__('mycustom.products')}}</a></li>
                                            </ul>
                                        @elseif (Auth::user()->utype == 'BLG')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.blogs') }}">{{__('mycustom.blogs')}}</a></li>
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('shop.wishlist') }}">{{__('mycustom.mywishlist')}}</a></li>
                                                <li><a href="{{ route('shop.cart') }}">{{__('mycustom.cart')}}</a></li>
                                                {{-- <li><a href="{{ route('user.dashbord') }}">Dashboard</a></li> --}}
                                            </ul>
                                        @endif
                                    </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-smartphone"></i><span>{{__('mycustom.phone')}}</span> +201110487092 </p>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            @livewire('wishlist-icon-component')
                            @livewire('cart-icon-component')
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    @livewire('header-search-component')
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="active" href="{{ route('home.index') }}#categories">
                            <span class="fi-rs-apps"></span> {{__('mycustom.browsecategories')}}
                        </a>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul>
                            <li><a href="/">{{__('mycustom.home')}} </a></li>
                            <li><a href="{{ route('shop') }}">{{__('mycustom.shop')}}</a></li>
                            <li><a href="{{ route('home.index') }}#newarrivals">{{__('mycustom.newarrivals')}} </a></li>
                            <li><a href="{{ route('blog') }}">{{__('mycustom.blogs')}}</a></li>
                            <li><a href="{{ route('home.index') }}#ourproducts">{{__('mycustom.ourproducts')}} </a></li>
                            <li><a href="#footer">Contact</a></li>
                            @auth
                            <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                @if(Auth::user()->utype == 'ADM')
                                    <ul class="sub-menu">
                                        {{-- <li><a href="{{ route('admin.dashbord') }}">Dashboard</a></li> --}}
                                        <li><a href="{{ route('admin.products') }}">{{__('mycustom.products')}}</a></li>
                                        <li><a href="{{ route('admin.categories') }}">{{__('mycustom.categories')}}</a></li>
                                        <li><a href="{{ route('admin.home.slider') }}">{{__('mycustom.slider')}}</a></li>
                                    </ul>
                                @else
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('shop.wishlist') }}">{{__('mycustom.mywishlist')}}</a></li>
                                        <li><a href="{{ route('shop.cart') }}">{{__('mycustom.cart')}}</a></li>
                                        {{-- <li><a href="{{ route('user.dashbord') }}">Dashboard</a></li> --}}
                                    </ul>
                                @endif
                            </li>
                            @endif
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    {{-- <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> Our location </a>
                    </div> --}}
                    {{-- <div class="single-mobile-header-info">
                        <a href="{{ route('login') }}">{{__('mycustom.login')}} </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{ route('register') }}">{{__('mycustom.signup')}}</a>
                    </div> --}}
                    @auth
                            <ul>
                                <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}  /
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">{{__('mycustom.logout')}}</a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li>
                                    <i class="fi-rs-key"></i>
                                    <a href="{{ route('login') }}">{{__('mycustom.login')}}</a>
                                    <br>
                                    <a href="{{ route('register') }}">{{__('mycustom.signup')}}</a>
                                </li>
                            </ul>
                            @endif
                    <div class="single-mobile-header-info">
                        <a href="#">+201110487092 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">{{__('mycustom.followus')}}</h5>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    {{$slot}};

    <footer class="main" id="footer">
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">{{__('mycustom.contact')}}</h5>
                            <p class="wow fadeIn animated">
                                <strong>{{__('mycustom.address')}}: </strong>45A helwan al-maraghi
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>{{__('mycustom.phone')}}: </strong>+201110487092
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>{{__('mycustom.email')}}: </strong>info@eltasmem.com
                            </p>

                    </div>

                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">{{__('mycustom.myacount')}}</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="{{ route('shop.wishlist') }}">{{__('mycustom.mywishlist')}}</a></li>
                            {{-- <li><a href="{{ route('shop.cart') }}">{{__('mycustom.cart')}}</a></li> --}}
                            <li><a href="{{ route('shop') }}">{{__('mycustom.shop')}}</a></li>
                            <li><a href="{{ route('home.index') }}#categories">{{__('mycustom.categories')}}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">{{__('mycustom.installapp')}}</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">{{__('mycustom.app')}}</p>
                                <div class="download-app wow fadeIn animated mob-app">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{ asset('assets/imgs/theme/app-store.jpg') }}" alt=""></a>
                                    <a href="#" class="hover-up"><img src="{{ asset('assets/imgs/theme/google-play.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                            </div> --}}
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <h5>{{__('mycustom.followus')}}</h5>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated mob-center">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                {{-- <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">
                        <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-conditions.html">Terms & Conditions</a>
                    </p>
                </div> --}}
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        &copy; <strong class="text-brand">Helwan.store</strong> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>

</html>
