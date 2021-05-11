@extends('layout.app')

@section('title','Media')

@section('body')
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('media/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Media</span> Coverages </h5>
            </div>

        </div>
    </div>


    <section class="coverage" >
        <div class="container">
            <div class="media-head-filter">
                <h4 class="heading-text inline"><span>Consolidated Coverage</span> Report</h4>
             </div>
        </div>
    </section>
    
    <section class="coverage-titles">
        <div class="container">
            <div class="row">
                @foreach ($medias as $item)
                <div class="col-md-6">
                    <div class="cov-title-single">
                        <h4><a href="{{ route('showMediaDetails',$item->slug) }}">{{ $item->title }}</a></h4>

                        <div class="cts-footer">
                            <a href="{{ route('showMediaDetails',$item->slug) }}" class="icon-hover">Read More <img src="/images/next-black.svg"></a>
                            @php $time = new DateTime($item->published_date); @endphp
                            <h6><i class="icon-calendar icons"></i><span> {{ $time->format('M dS, Y') }}</span></h6>
                        </div>
                    </div>
                </div>
                @endforeach

              

                
            </div>
        </div>
    </section>


@endsection