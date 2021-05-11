
@extends('layout.app')
@section('title',$blog->title)
@section('canonical')
    <link rel=“canonical” href=“{{ route('showBlogDetails',$blog->slug) }}” />
@endsection

@section('header')
    <header>
        <time class="op-published" datetime="{{ $blog->created_at }}" />
    </header>
@endsection

@section('meta')
	<!-- Primary Meta Tags -->
	<meta name="title" content="{{ $blog->title }}">
	<meta name="description" content="{{ $blog->meta_description }}">



	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ route('showBlogDetails',$blog->slug) }}">
	<meta property="og:title" content="{{ $blog->title }}">
	<meta property="og:description" content="{{ $blog->meta_description }}">
	<meta property="og:image" content="{{ Kshitiz::image($blog->image) }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ route('showBlogDetails',$blog->slug) }}">
	<meta property="twitter:title" content="{{ $blog->title }}">
	<meta property="twitter:description" content="{{ $blog->meta_description }}">
	<meta property="twitter:image" content="{{ Kshitiz::image($blog->image) }}">

    <meta name="keywords" content="{{ $blog->meta_keywords }}">
    <meta name="author" content="{{ $blog->authore }}">
@endsection


@section('body')
    <section class="news-detail-banner" style="background: url({{ Voyager::image($blog->image) }});">
                
    </section>

    <section class="nd-body">
        <div class="container ">
            <div class="ndb-head">
                <h2 class="heading-text">{{ $blog->title }}</h2>

                <div class="art-writer-date">
                    <h5>
                        By 
                        <span>{{ $blog->author }}</span>
                    </h5>

                    <h5>
                        <i class="icon-calendar icons"></i>
                        <span>{{ date('M d, Y',strtotime($blog->date)) }}</span>

                    </h5>
                </div>

                <div class="news-desc">
                    {!! $blog->body !!}
                </div>
            </div>
        </div>
    </section>

{{--  
    <section class="news-sec">
        <div class="container">
            <div class="news-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="news-title">
                            <h4 class="heading-text"> <span>Recent</span> Blogs</h4>
                            <a href="article.html" >For an in-depth look at Creasion's publications, visit our media page.</a>
                        </div>   
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="news-card">
                            <div class="news-img" style="background: url(images/blog/summer.jpg);">
                            </div>

                            <div class="news-text">
                                <h4>SUMMER VACATION</h4>

                                <a href="blog-detail.html">Learn More <img src="images/next-black.svg"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="news-card">
                            <div class="news-img" style="background: url(images/blog/2.jpg);">
                            </div>

                            <div class="news-text">
                                <h4>CIRCULAR ECONOMY: THE SOLUTION TO SUSTAINABILITY </h4>

                                <a href="blog-detail.html">Learn More <img src="images/next-black.svg"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="news-card">
                            <div class="news-img" style="background: url(images/blog/3.jpg);">
                            </div>

                            <div class="news-text">
                                <h4>GENDER INCLUSION IN CLIMATE CHANGE ADAPTABILITY </h4>

                                <a href="blog-detail.hmtl">Learn More <img src="images/next-black.svg"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
     --}}

@endsection


@section('js')
    <script>
        $('iframe').addClass('embed-responsive-item');
        $('iframe').wrap("<div class='embed-responsive embed-responsive-16by9'></div>");
    </script>
@endsection