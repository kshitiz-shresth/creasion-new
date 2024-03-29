@extends('layout.app')


@section('title', 'Projects')


@section('body')
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="donateMhead">{{ $project->button_title }}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="donate-bank">
                        {!! $project->button_content !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="creasion-banner inner-banner" style="background: url({{ Voyager::image($project->coverImage) }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">
                <div class="bread-crumbs">
                    <h6>{{ $project->title }}</h6>
                </div>

                {!! $project->short_info !!}
                @if ($project->button_title)
                    <a href="#" class="btn-big pri" data-toggle="modal"
                        data-target="#donateModal">{{ $project->button_title }} <img src="/images/next.svg"> </a>
                @endif
            </div>

        </div>
    </div>


    <section class="inner-about-style3 ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="iabs-left">
                        {!! $project->facts !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="iabs-right">
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($project->slug=='oxygen-for-nepal')
        <section class="lkint">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="prso">
                            <div class="prso-sing">
                                <h5>The Problem</h5>
                                <img src="{{asset('css/problem.svg')}}" alt="">

                                <p>
                                    Nepal's Test Positivity Rate is almost 50%, the world's highest by now.Daily death
                                    count is raising but with the limitations of essential commodities such as oxygen, the
                                    crisis is worsening.
                                </p>
                            </div>

                            <div class="prso-sing">
                                <h5>The Solution </h5>
                                <img src="{{asset('css/solution.svg')}}" alt="">

                                <p>
                                    CREASION's Covid-19 Response has initiated multiple solutions in collaboration
                                    with different partners to fill the supply and demand gap of essential infrastructures.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <h5>The Interventions</h5>
                        <div class="tin-wrap">
                            <div class="tinw-sing">
                                <img src="{{asset('css/oxy-plant.svg')}}" alt="">
                                <p>Oxygen Plants</p>
                            </div>

                            <div class="tinw-sing">
                                <img src="{{asset('css/oxy-clin.svg')}}" alt="">
                                <p>Oxygen Cylinders and Concentrators</p>
                            </div>

                            <div class="tinw-sing">
                                <img src="{{asset('css/isolation.svg')}}" alt="">
                                <p> Isolation Center</p>
                            </div>

                            <div class="tinw-sing">
                                <img src="{{asset('css/covid-saftey.svg')}}" alt="">
                                <p>Covid-19 Saftey Resources</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    @if (count(json_decode($project->faqs)) > 0)
        <section class="home-about ptb-70 ">
            <div class="container">

                <div class="row ">

                    <div class="col-md-12">
                        <div class="right-slider">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    @foreach (json_decode($project->faqs) as $item)
                                        <li class="accordion-item">
                                            <a class="accordion-title" href="javascript:void(0)">
                                                <i><img src="/images/caret.png"></i>
                                                {{ strip_tags($item->question) }}
                                            </a>

                                            <div class="accordion-content">
                                                {!! $item->answer !!}

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
    @endif

    @if (count($our_impacts) > 0)
        <section class="projects-impacts number-counter-section ptb-50">
            <div class="container">
                <h4 class="heading-text inline text-center"><span>Impacts</span></h4>

                <div class="padding-wrap">
                    <div class="row" style="justify-content: center; ">
                        @if (count($our_impacts) > 4)
                            @php $col = 4; @endphp
                        @else
                            @php $col = 3; @endphp
                        @endif
                        @foreach ($our_impacts as $item)

                            <div class="col-md-{{ $col }} col-sm-6">
                                <div class="pr-imp-card">
                                    @php
                                        $count = explode('/', $item->totalCount);
                                    @endphp
                                    @if (!isset($count[1]))
                                        <img src="/storage/{{ $item->iconLocation }}">
                                        <h2>
                                            <span class="odometer" data-count="{{ $item->totalCount }}">00</span>
                                            @if ($item->subScript)
                                                <span class="odo-sign">{{ $item->subScript }}</span>
                                            @endif
                                        </h2>

                                        <h4 class="counter-subhead">{{ $item->title }}</h4>
                                    @else
                                        <img src="/storage/{{ $item->iconLocation }}">


                                        <div class="pr-pro">
                                            <div class="prp-sing">
                                                <h2>
                                                    <span class="odometer" data-count="{{ $count[1] }}"></span>
                                                    @if ($item->subScript)
                                                        <span class="odo-sign">{{ $item->subScript }}</span>
                                                    @endif
                                                </h2>
                                                <h4>Target</h4>
                                            </div>

                                            <div class="prp-sing">
                                                <h2>
                                                    <span class="odometer" data-count="{{ $count[0] }}"></span>
                                                    @if ($item->subScript)
                                                        <span class="odo-sign">{{ $item->subScript }}</span>
                                                    @endif
                                                </h2>
                                                <h4>Achieved</h4>
                                            </div>
                                        </div>

                                        <h5 class="prp-label">{{ $item->title }}</h5>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (count($progress) > 0)
        <section class="projects-impacts number-counter-section ptb-50">
            <div class="container">
                <h4 class="heading-text inline text-center">Progress</h4>

                <div class="padding-wrap">
                    <div class="row" style="justify-content: center; ">
                        @if (count($progress) > 4)
                            @php $col = 4; @endphp
                        @else
                            @php $col = 4; @endphp
                        @endif
                        @foreach ($progress as $item)

                            <div class="col-md-{{ $col }} col-sm-6">
                                <div class="pr-imp-card">
                                    @php
                                        $count = explode('@', $item->totalCount)[0];
                                        $count = explode('/', $count);
                                    @endphp
                                    @if (!isset($count[1]))
                                        <img src="/storage/{{ $item->iconLocation }}">
                                        <h2>
                                            <span class="odometer" data-count="{{ $item->totalCount }}">00</span>
                                            @if ($item->subScript)
                                                <span class="odo-sign">{{ $item->subScript }}</span>
                                            @endif
                                        </h2>

                                        <h4 class="counter-subhead">{{ $item->title }}</h4>
                                    @else
                                        <img src="/storage/{{ $item->iconLocation }}">


                                        <div class="pr-pro">
                                            <div class="prp-sing">
                                                <h2>
                                                    <span class="odometer" data-count="{{ $count[1] }}"></span>
                                                    @if ($item->subScript)
                                                        <span class="odo-sign">{{ $item->subScript }}</span>
                                                    @endif
                                                </h2>
                                                <h4>Target</h4>
                                            </div>

                                            <div class="prp-sing">
                                                <h2>
                                                    <span class="odometer" data-count="{{ $count[0] }}"></span>
                                                    @if ($item->subScript)
                                                        <span class="odo-sign">{{ $item->subScript }}</span>
                                                    @endif
                                                </h2>
                                                <h4>Achieved</h4>
                                            </div>
                                        </div>

                                        <h5 class="prp-label">{{ $item->title }}</h5>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
    @endif


    @if(isset($project->partners) && count(json_decode($project->partners)) > 0 )
    <section class="oxy-part">
        <div class="container">
            <h3 class="heading-text inline pb-15"><span></span> Partners</h3>

            <div class="op-wrap">
                @foreach (json_decode($project->partners) as $item)
                <div class="op-sing">
                    <img src="{{ '/storage/'.$item->imageLocation }}" alt="">
                    <h4>{{ $item->title }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(isset($subProjects[0]->title_image) && isset($subProjects[0]->title))
    @if ($subProjects)
        <section class="inner-projects ptb-70">
            <div class="container">
                <div class="inner-project-title">
                    {!! $project->sub_project_title !!}
                </div>
                <div class="inter-wrap-style">
                    <div class="row">
                            @foreach ($subProjects as $item)
                                <div class="col-md-4 int-wrap-card">
                                    <div class="int-sing-wrp">
                                        <a href="#" class="iread vfc-ihover">
                                            <div class="isw-box">
                                                <div class="iswb-img">
                                                    @if(isset($item->title_image))<img src="{{ Voyager::image($item->title_image) }}">@endif
                                                </div>

                                                <div class="iswb-name">
                                                    <h6 style=" color: #17469e; ">{{ $project->title }}</h6>
                                                    <h3>{{ $item->title }}</h3>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="inter-detail ">

                                            <a href="#" class="iclose"><i class="icon-close icons"></i> </a>

                                            @php
                                                $subProject = json_decode($item->data);
                                            @endphp
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="id-ns">
                                                        <!--  <img src="/images/vfc/empower-logo.png" class="if-logo"> -->
                                                        <h2>{{ $item->title }}</h2>

                                                        {!! $subProject->shortDescription !!}


                                                        <div class="id-imp-wrap">
                                                            @foreach ($subProject->counterSection as $counterItem)
                                                                <div class="id-imapct">
                                                                    <div class="idi-icon">
                                                                        <img
                                                                            src="{{ Voyager::image('icons/' . $counterItem->icon) }}">
                                                                    </div>

                                                                    <div class="idi-num">
                                                                        <h4>{{ $counterItem->count }}
                                                                            <span>{{ $counterItem->subscript }}</span>
                                                                        </h4>
                                                                        <p>{{ $counterItem->title }}</p>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="id-overflow">
                                                        @foreach ($subProject->description as $subProjectItem)
                                                            <div class="id-detail">
                                                                <h4>{{ $subProjectItem->title }}</h4>
                                                                {!! $subProjectItem->body !!}
                                                            </div>
                                                        @endforeach
                                                        @if (!empty($subProject->flagSection))
                                                            <div class="id-detail">
                                                                <h4>Volunteers from</h4>
                                                                <ul class="sdg-logo-list">
                                                                    @foreach ($subProject->flagSection as $item)
                                                                        <li><img
                                                                                src="/storage/sub-projects/countries/{{ $item }}">
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @foreach ($subProject->carouselSection as $carouselItem)
                                                            <div class="id-detail id-tes">
                                                                <h4>{{ $carouselItem->topLevelTitle }}</h4>

                                                                <div class="id-test owl-carousel .owl-theme">
                                                                    @foreach ($carouselItem->topLevelBody as $slider)
                                                                        <div class="item">
                                                                            <div class="id-test-sing">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-md-4">
                                                                                        <div class="id-tes-img">
                                                                                            <img
                                                                                                src="{{ Voyager::image('sub-projects/carousel-images/' . $slider->image) }}">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-8">
                                                                                        <div class="id-tes-text">
                                                                                            {!! $slider->insideBody !!}

                                                                                            <h5>{{ $slider->insideTitle }} 
                                                                                            </h5>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @if ($subProject->mapSection->mapCode || $subProject->mapSection->districtName)
                                                            <div class="id-detail">
                                                                <h4>Our Project Site</h4>
                                                                @if ($subProject->mapSection->mapCode)
                                                                    <div class="map">
                                                                        {!! $subProject->mapSection->mapCode !!}
                                                                    </div>
                                                                @endif
                                                                @if ($subProject->mapSection->districtName)
                                                                    <div class="cov-resp-names">
                                                                        <ul>
                                                                            @foreach (explode(',', $subProject->mapSection->districtName) as $item)
                                                                                <li>{{ $item }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif

                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </section>
    @else
        @if (view()->exists('staticProjects.' . Str::slug($project->title)))
            @include('staticProjects.'.Str::slug($project->title))
        @endif
    @endif
    @endif


    {{-- VFC SPOTLIGHT --}}
    @if (count(json_decode($project->spotlight)) > 0)
        <section class="vfc-spotlight pt-50">
            <div class="container">
                <h3 class="heading-text inline pb-20"><span>{{ $shortForm }}</span> Spotlight</h3>
            </div>
            <div class="containerss">
                <div class="spotlight-slides owl-carousel owl-theme">
                    @foreach (json_decode($project->spotlight) as $item)
                        <div class="item">
                            <div class="spot-wrap">
                                <div class="sw-img">
                                    <img src="/storage/spotlight/{{ $item->imageName }}">
                                    <h4>{{ $item->name }}</h4>
                                </div>

                                <div class="sp-text-abs">
                                    <p>{{ $item->body }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>
    @endif

    {{-- VFC Testimonial --}}
    @if (count(json_decode($project->testimonial)) > 0)
        <section class="vfc-spotlight pt-50">
            <div class="container">
                <h3 class="heading-text inline pb-20"><span>{{ $shortForm }}</span> Testimonial</h3>
            </div>
            <div class="containerss">
                <div class="spotlight-slides owl-carousel owl-theme">
                    @foreach (json_decode($project->testimonial) as $item)
                        <div class="item">
                            <div class="spot-wrap">
                                <div class="sw-img">
                                    <img src="/storage/testimonial/{{ $item->imageName }}">
                                    <h4>{{ $item->name }}
                                        <label>{{ $item->designation }}</label>
                                    </h4>
                                </div>

                                <div class="sp-text-abs">
                                    <p>{{ $item->body }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>
    @endif

    @if (count(json_decode($project->sdgs)) > 0)
        <section class="sdg-logos ptb-50">
            <div class="container">
                <h3 class="heading-text inline pb-20"><span>Our Contribution</span> to Global Goals</h3>

                <ul class="sdg-logo-list">
                    @foreach (json_decode($project->sdgs) as $item)
                        <li><img src="/storage/sdgs/{{ $item->imageNumber }}.png"></li>
                    @endforeach
                </ul>

            </div>
        </section>
    @endif

    @if ($project->sliders)
        <section class="image-gallery pt-50 ">
            <div class="container">

                <div class="ig-slider owl-carousel">
                    @foreach (json_decode($project->sliders->images) as $item)
                        <div class="item">
                            <img src="{{ Voyager::image($item) }}" alt="" />
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif
@endsection

@section('js')
    <script>

    </script>
@endsection
