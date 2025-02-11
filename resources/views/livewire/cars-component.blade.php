<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span>  سيارات
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
        <section class="">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header">
                            <h1 class="font-xxl text-brand"> سيارات </h1>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <section class="gallery" style="">
                                    <!-- Inner -->
                                    <div class="">
                                      <!-- Single item -->
                                      <div class="mb-2">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-6 col-lg-4">
                                              <div class="card mb-5">
                                                <img
                                                  src="{{ asset('assets/imgs/guide/cars/1.png') }}"
                                                  class="card-img-top"
                                                  alt=""
                                                />
                                                <div class="card-body">
                                                  <h5 class="card-title fw-bold fs-4"> تعليم سواقة </h5>
                                                  <a href="{{route('drive')}}" class="btn ps-3 pe-3"> Show </a>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-6 col-lg-4">
                                              <div class="card mb-5">
                                                <img
                                                  src="{{ asset('assets/imgs/guide/cars/2.jpg') }}"
                                                  class="card-img-top"
                                                  alt=""
                                                />
                                                <div class="card-body">
                                                  <h5 class="card-title fw-bold fs-4"> بيع </h5>
                                                  <a href="{{route('sale')}}" class="btn ps-3 pe-3"> Show </a>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="col-6 col-lg-4">
                                                <div class="card mb-5">
                                                  <img
                                                    src="{{ asset('assets/imgs/guide/cars/3.jpg') }}"
                                                    class="card-img-top"
                                                    alt=""
                                                  />
                                                  <div class="card-body">
                                                    <h5 class="card-title fw-bold fs-4">  إيجار </h5>
                                                    <a href="{{route('rent')}}" class="btn ps-3 pe-3"> Show </a>
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="col-6 col-lg-4">
                                                <div class="card mb-5">
                                                  <img
                                                    src="{{ asset('assets/imgs/guide/cars/4.jpg') }}"
                                                    class="card-img-top"
                                                    alt=""
                                                  />
                                                  <div class="card-body">
                                                    <h5 class="card-title fw-bold fs-4"> قطع غيار وصيانة </h5>
                                                    <a href="{{route('fix')}}" class="btn ps-3 pe-3"> Show </a>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Inner -->
                                  </section>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
