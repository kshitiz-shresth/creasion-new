@extends('layout.app')

@section('title','Team')


@section('body')
    
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('stories/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span> Stories </span></h5>
            </div>

        </div>
    </div>

    <section class="success-stories ptb-50">
        <div class="container">
            @foreach ($stories as $item)
            <div class="single-story">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="story-img">
                            <img src="{{ Voyager::image($item->image) }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="story-text">
                            <h4>{{ $item->name }}</h4>

                            {!! $item->story !!}
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="news-paginations">
                {{ $stories->links() }}
            </div>
        </div>
        

    </section>
       
@endsection