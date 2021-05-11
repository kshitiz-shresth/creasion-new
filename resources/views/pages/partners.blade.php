@extends('layout.app')

@section('title','About Us')


@section('body')
    <section class="abt-banner">
        <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('partners/banner.jpg') }});">
            <div class="banner-overlay"></div>
            <div class="container">

                <div class="cb-content">

                    <h5 class="heading-text inline"><span>Our</span> Partners  </h5>
                </div>

            </div>
        </div>
    </section>

    <section class="team-creasion">
        <div class="container">
            <!-- Parnters -->
            <div class='par-wrap'>
                <h4 class="heading-text inline " > Partners</h4>
                    <div class="spm-wrap"> 
                        <div class="sec-priority">
                            @foreach ($others as $item)
                                <div class="partner-logo">
                                    <img src="{{ Voyager::image($item->image) }}">
                                </div>
                            @endforeach             
                        </div>
                    </div>
            </div>
            <!-- Implementing Partners-->
            <div class="par-wrap" >
                <h4 class="heading-text inline " >Implementing <strong> Partners </strong></h4>
                <div class="spm-wrap">
                    <div class="sec-priority">
                        @foreach ($topPriorities as $item)
                                <div class="partner-logo">
                                    <img src="{{ Voyager::image($item->image) }}">
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection