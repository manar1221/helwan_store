<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span> {{__('mycustom.blogs')}}
                    <span></span> {{__('mycustom.details')}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-page pr-30">
                            <div class="single-header style-2">
                                <h1 class="mb-30">{{ $blog->short_description }}</h1>
                                <div class="single-header-meta">
                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                        <span class="post-on has-dot">{{ $blog->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <figure class="single-thumbnail">
                                <img src="{{ asset('assets/imgs/blogs') }}/{{ $blog->image }}" alt="{{ $blog->name }}">
                            </figure>
                            <div class="single-content">
                                <p>{{ $blog->description }}</p>
                                </div>
                            <div class="entry-bottom mt-50 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                <div class="social-icons single-share">
                                    <ul class="text-grey-5 d-inline-block">
                                        <li><strong class="mr-10">{{__('mycustom.followus')}}</strong></li>
                                        <li class="social-facebook"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                        <li class="social-twitter"> <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                        <li class="social-instagram"><a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <!--Widget latest posts style 1-->
                            <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">{{__('mycustom.latestnews')}}</h5>
                                </div>

                                <div class="row">
                                    @foreach ($lblogs as $lblog)
                                        <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                            <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                                <a href="{{ route('blog.details',['slug'=>$blog->slug]) }}">
                                                    <img src="{{ asset('assets/imgs/blogs')}}/{{$lblog->image}}" alt="{{ $lblog->name }}">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-10 text-limit-2-row">{{ $lblog->short_description }}</h6>
                                                <div class="entry-meta meta-13 font-xxs color-grey">
                                                    <span class="post-on mr-10">{{ $lblog->created_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
