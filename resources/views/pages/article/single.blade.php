
@extends('layout.app')
@section('title',$article->title)
@section('canonical')
    <link rel=“canonical” href=“{{ route('showBlogDetails',$article->slug) }}” />
@endsection

@section('header')
    <header>
        <time class="op-published" datetime="{{ $article->created_at }}" />
    </header>
@endsection

@section('meta')
	<!-- Primary Meta Tags -->
	<meta name="title" content="{{ $article->title }}">
	<meta name="description" content="{{ $article->meta_description }}">



	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ route('showBlogDetails',$article->slug) }}">
	<meta property="og:title" content="{{ $article->title }}">
	<meta property="og:description" content="{{ $article->meta_description }}">
	<meta property="og:image" content="{{ Kshitiz::image($article->cover,'small') }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="{{ route('showBlogDetails',$article->slug) }}">
	<meta property="twitter:title" content="{{ $article->title }}">
	<meta property="twitter:description" content="{{ $article->meta_description }}">
	<meta property="twitter:image" content="{{ Kshitiz::image($article->cover,'small') }}">

    <meta name="keywords" content="{{ $article->meta_keywords }}">
    <meta name="author" content="{{ $article->author }}">
@endsection


@section('body')
    <section class="news-detail-banner" style="background: url({{ Voyager::image($article->cover) }});">
                
    </section>

    <section class="nd-body">
        <div class="container ">
            <div class="ndb-head">
                <h2 class="heading-text">{{ $article->title }}</h2>

                <div class="art-writer-date">
                    <h5>
                        By 
                        <span>{{ $article->author }}</span>
                    </h5>

                    <h5>
                        <i class="icon-calendar icons"></i>
                        <span>{{ date('M d, Y',strtotime($article->date)) }}</span>

                    </h5>
                </div>

                <div class="news-desc">
                    {!! $article->body !!}
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