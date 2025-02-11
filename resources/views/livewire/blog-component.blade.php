<div>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                    <span></span> الوظائف
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50">
                            <h1 class="font-xxl text-brand"> الوظائف </h1>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                @foreach ($blogs as $blog)
                                    <div class="col-lg-4">
                                        <article class="wow fadeIn animated hover-up mb-30">
                                            <div class="post-thumb img-hover-scale">
                                                <a href="{{ route('blog.details',['slug'=>$blog->slug]) }}">
                                                    <img src="{{ asset('assets/imgs/blogs') }}/{{ $blog->image }}" alt="{{ $blog->name }}">
                                                </a>
                                            </div>
                                            <div class="entry-content-2">
                                                <h3 class="post-title mb-15">
                                                    <a href="{{ route('blog.details',['slug'=>$blog->slug]) }}">{{ $blog->short_description }}</a></h3>
                                                <p class="post-exerpt mb-30">{{ $blog->description }}</p>
                                                <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                    <div>
                                                        <span class="post-on"> <i class="fi-rs-clock"></i> {{ $blog->created_at }}</span>
                                                    </div>
                                                    <a href="{{ route('blog.details',['slug'=>$blog->slug]) }}" class="text-brand">{{__('mycustom.readmore')}} <i class="fi-rs-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--post-grid-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{ $blogs->links() }}
                            {{-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search…">
                                        <button type="submit"> <i class="fi-rs-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!--Widget categories-->
                            <div class="sidebar-widget widget_categories mb-40">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">{{__('mycustom.categories')}}</h5>
                                </div>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul>
                                        <li class="cat-item cat-item-2"><a href="blog.html">Beauty</a> (3)</li>
                                        <li class="cat-item cat-item-3"><a href="blog.html">Book</a> (6)</li>
                                        <li class="cat-item cat-item-4"><a href="blog.html">Design</a> (4)</li>
                                        <li class="cat-item cat-item-5"><a href="blog.html">Fashion</a> (3)</li>
                                        <li class="cat-item cat-item-6"><a href="blog.html">Lifestyle</a> (6)</li>
                                        <li class="cat-item cat-item-7"><a href="blog.html">Travel</a> (2)</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
</div>
