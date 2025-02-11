<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span> {{__('mycustom.maintenanceandservices')}}
                </div>
            </div>
        </div>
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
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50">
                            <h1 class="font-xxl text-brand">{{__('mycustom.maintenanceandservices')}}</h1>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <h1 class="font-xxl ">COMING SOON <span class="text-brand">...</span> </h1>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
