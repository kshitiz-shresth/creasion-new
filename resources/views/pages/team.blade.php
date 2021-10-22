@extends('layout.app')

@section('title','Team')

@section('body')
        
    <section class="abt-banner rm-mr-btn">
        <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('teams/banner.jpg') }});">
            <div class="banner-overlay"></div>
            <div class="container">

                <div class="cb-content">

                    <h5 class="heading-text inline"><span>Our</span> Team  </h5>
                </div>

            </div>
        </div>
    </section>

    <section class="another-head">
        <div class="container">
            @foreach ($teamCategories as $item)
                <a href="?type={{ $item->slug }}" class="{{ $loop->first && request('type')==null ? 'active' : (request('type')==$item->slug ? 'active' : '') }}">{{ $item->title }}</a>
            @endforeach
        </div>
    </section>

    <section class="team-creasion">
        <div class="container">
            <div class="row">
                @foreach ($team as $item)
                <div class="col-md-4 col-12">
                    <div class="team-sing">
                        <div class="team-img">
                            <img src="{{ Voyager::image($item->image) }}">
                        </div>

                        <div class="team-text">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>


@endsection