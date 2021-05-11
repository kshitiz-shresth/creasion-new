@extends('layout.app')

@section('title','About Us')

@section('body')
    <section class="abt-banner">
        <div class="creasion-banner resource-banner " style="background: url({{ Voyager::image('aboutus/'.$aboutus['cover']) }});">
            <div class="banner-overlay"></div>
            <div class="container">

                <div class="cb-content">

                    <h5 class="heading-text inline"><span>About</span> Us  </h5>
                </div>

            </div>
        </div>
    </section>

    <section class="inner-about-style3 ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="iabs-left iabs-pad-right">
                        {!! $aboutus['shortInfo'] !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="iabs-right pf-zero">
                       {!! $aboutus['description'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="abt-mission ptb-50">
        <div class="container">
            <h4>Our Approach</h4>
            <div class="row">
                @foreach ($aboutus['ourApproach'] as $item)
                <div class="col-md-4">
                    <div class="approach-card hvr-effect">
                        <img src="/storage/icons/{{ $item['icon'] }}">
                        <h5>{{ $item['title'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--     <section class="creasion-full-form">
    
            <img src="/images/about/3d.png">        


    </section> -->

    <section class="ab-values abt-mission ptb-50">
        <div class="container">
            <h4>Our Values</h4>
            <div class="abv-wrap">
                <div class="row no-gutter">
                    @foreach ($aboutus['ourValues'] as $item)
                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card ">
                            <img src="/storage/icons/{{ $item['icon'] }}">
                            <h5>{{ $item['title'] }}</h5>
                            <p>{{$item['description']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="words-from" style="background: url({{ Voyager::image('aboutus/'.$aboutus['president']['cover']) }});">
        <div class="container">
            <div class="founder-word">
                <h4>{{ $aboutus['president']['name'] }}</h4>
                <h6>{{ $aboutus['president']['designation'] }}</h6>

                {!! $aboutus['president']['description'] !!}

                <a href="{{ $aboutus['president']['buttonLink'] }}" class="btn-big pri">{{ $aboutus['president']['buttonTitle'] }} <img src="/images/next.svg"></a>
            </div>
        </div>
    </section>

@endsection
