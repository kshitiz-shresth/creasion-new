@extends('layout.app')

@section('title','Creasion - Envisioning the Change for Sustainable Communities')

@section('body')
    <!-- Landing Page Pop-Up -->
    @foreach ($popups as $item)
        <div class="modal fade" id="indexModal{{ $loop->iteration }}" role="dialog">

            <div class="modal-dialog modal-lg">



                <div class="modal-content">

                    <div class="modal-header">



                        <button type="button" class="close" data-dismiss="modal">&times;</button>



                    </div>

                    <div class="modal-body">



                        <section class="stage">

                            <img src="{{ Voyager::image($item->image) }}" class="model-img">

                        </section>



                    </div>

                    <div class="modal-footer">





                    </div>

                </div>

            </div>

        </div>
    @endforeach
    {{-- end of modal --}}

	<div class="creasion-banner main-banner" style="background: url(/storage/homepage/{{ $homePageSection['bannerImage'] }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">
                <h4><span class="cbc-bold">{!! $homePageSection['bannerTitle'] !!}</h4>
                <a href="{{ $homePageSection['bannerButtonUrl'] }}" class="btn-big pri">{{ $homePageSection['bannerButton'] }} <img src="images/next.svg"> </a>
            </div>

        </div>
    </div>

    <section class="foundation ptb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fo-text">
                        {!! $aboutSection['title'] !!}

                        {!! $aboutSection['body'] !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fo-img">
                        <img src="/storage/homepage/{{ $aboutSection['topImage'] }}" class="abt-top ab-abs wow slideInDown slow">
                        <img src="/storage/homepage/{{ $aboutSection['middleImage'] }}" class="abt-middle wow slideInRight slow">
                        <img src="/storage/homepage/{{ $aboutSection['bottomImage'] }}" class="abt-btn ab-abs wow slideInUp slow">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-intervention number-counter-section">
        <div class="container">

            <div class="row int-pad">
                @foreach ($counterSection as $item)
                 <div class="col-ec-2 col-xs-6  ">
                    <div class="int-card">
                        <div class="ic-img">
                            <div class="ic-img">
                                <img src="/storage/icons/{{ $item['topIcon'] }}" >

                            </div>
                        </div>

                        <div class="ic-text">
                            <h2>
                                <span class="odometer" data-count="{{ $item['count'] }}">00</span>
                            </h2>

                            <h4 class="counter-subhead">{{ $item['title'] }}</h4>

                            <p>{{ $item['body'] }}</p>

                            <div class="intervention-hover">
                                <img src="/storage/icons/{{ $item['bottomIcon'] }}">
                                <a href="{{ $item['link'] }}" class="icon-hover">learn more<img src="/images/next-black.svg"></a>
                            </div>

                            {{-- <div class="mb-int"><a href="vfc.html">Volunteer For Change </a></div> --}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </section>

    <section class="home-about ptb-70">
        <div class="container">

            <div class="row ">

                <div class="col-md-12">
                    <div class="right-slider">
                        <div class="faq-accordion-content">
                            <ul class="accordion">
                                @foreach ($faqSection as $item)
                                  <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i ><img src="/images/caret.png"></i>
                                        {{ strip_tags($item['question']) }}
                                    </a>

                                    <div class="accordion-content">
                                        {!! $item['answer'] !!}
                                     </div>

                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        function youtube_parser($url){
            preg_match('/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/',$url,$match);
               return $match[7];
            }
    @endphp

    <section class="index-video ptb-70">
        <div class="container">

            @foreach ($videoSlideSection as $item)
              <!-- Video Model For Partistha -->
            <div class="video-display name{{ $loop->iteration }}" id="covid-vid">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ youtube_parser($item['youtubeLink']) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <a href="" class="close-btn">X</a>
            </div>
            @endforeach


            <div class="video-slides owl-carousel">
                @foreach ($videoSlideSection as $item)
                    <div class="item" >
                        <div class="iv-wrap">
                            <div class="iv-img">
                                <img src="/storage/homepage/{{ $item['image'] }}">
                                <div class="about-video">

                                    <button class="video-btn" id="video-model{{ $loop->iteration }}">
                                        <i class="icon-control-play icons"></i>

                                    </button>

                                </div>
                            </div>

                            <div class="iv-text">
                                <h4 class="heading-text">
                                    <span>{{ $item['name'] }}</span>
                                    {{ $item['title'] }}
                                </h4>

                                <p>{{ $item['body'] }}</p>

                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="news-sec">
        <div class="container">
            <div class="news-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="news-title">
                            <h4 class="heading-text "><span>Featured </span>News</h4>
                            <a href="/news-articles" >For an in-depth look at Creasion's publications, visit our media page.</a>
                        </div>
                    </div>
                    @foreach ($articles as $item)
                    <div class="col-lg-3 col-md-4">
                        <div class="news-card">
                            <div class="news-img" style="background: url({{ Voyager::image($item->cover) }});">
                            </div>

                            <div class="news-text">
                                <h4> {{ $item->title }}</h4>
                                <h5>
                                    <i class="icon-calendar icons"></i>
                                    <span>{{ date('M d, Y',strtotime($item->date)) }}</span>

                                </h5>
                                <a href="{{ route('showArticleDetails',$item->slug) }}">Learn More <img src="images/next-black.svg"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>


        <!-- Start Instagram Area -->
    {{-- <div class="instagram-area">
        <div >
            <div class="instagram-slides ">
                @foreach ($instaData as $item)
                <div class="instagram-box">
                    <img src="{{ $item['node']['display_url'] }}" alt="image">

                    <div class="insta-icon">
                        <a href="https://www.instagram.com/p/{{ $item['node']['shortcode'] }}/" target="_blank"><i class="icon-social-instagram icons"></i></a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div> --}}

    <div class='islides'>
        <div data-mc-src="3f543ef5-7cc4-4b2f-9fb3-ff79e162c40a"></div>

        <script
          src="https://cdn2.woxo.tech/a.js#5feab2befa547f0015951b30"
          async data-usrc>
        </script>
    </div>
@endsection


@section('js')
    <script>
      $.ajax({
    url:"https://www.instagram.com/creasionorg?__a=1",
    type:'get',
    success:function(response){
      posts = response.graphql.user.edge_owner_to_timeline_media.edges;
        console.log(posts);
    }
      });

        @foreach($popups as $item)
        $(window).on('load',function(){

            $('#indexModal{{ $loop->iteration }}').modal('show');

        });
        @endforeach

        @foreach($videoSlideSection as $item)
            $("#video-model{{ $loop->iteration }}").click(function (e) {
                $('.name{{ $loop->iteration }}').toggleClass('video-show');
                e.stopPropagation()

            });
        @endforeach

        // Video Slides
        $('.video-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            smartSpeed: 750,
            autoplay: false,
            navText: [
                "<i class='icons icon-arrow-left-circle'></i>",
                "<i class='icon-arrow-right-circle icons'></i>"
            ],

                responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                1200: {
                    items: 1,
                }
            }

        });

    </script>
@endsection
