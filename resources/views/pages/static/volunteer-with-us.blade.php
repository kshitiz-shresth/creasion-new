@extends('layout.app')

@section('title','Volunteer With Us')


@section('body')
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('volunteer-with-us/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Volunteer With</span> Us </h5>
            </div>

        </div>
    </div>

        <section class="how-to-vol ptb-50">
            <div class="container">
                <div class="htv-head">
                    <h4 class="heading-text inline"><span>How to become</span> a volunteer</h4>
                    <p>To become an Creasion volunteer, an individual is required to complete the following volunteer process:</p>    
                </div>
                

                <div class="volunteer-process">
                    <div class="row no-gutter"> 
                        <div class="col-md-3 no-pad">
                            <div class="vp-single">
                                <img src="images/research-program.svg">
                                <h4> Research about our Programs</h4>
                            </div>
                        </div>

                        <div class="col-md-3 no-pad">
                            <div class="vp-single">
                                <img src="images/click.svg">
                                <h4>Choose what interests you </h4>
                            </div>
                        </div>

                        <div class="col-md-3 no-pad">
                            <div class="vp-single">
                                <img src="images/submit.svg">
                                <h4>Fill the required information</h4>
                            </div>
                        </div>

                        <div class="col-md-3 no-pad">
                            <div class="vp-single">
                                <img src="images/interview.svg">
                                <h4>Get interviewed by CREASION team </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="vol-opp ptb-50">
            <div class="container">
                <div class="htv-head">
                    <h4 class="heading-text inline"><span>Volunteer</span> opportunities</h4>
                    
                    <div class="opp-list">
                        <div class="row">
                            @foreach (\App\VolunteerOpportunity::orderBy('order')->get() as $item)
                            <div class="col-md-6">
                                <article>
                                    <img src="{{ Voyager::image($item->image) }}">
                                    <div class="articlecaption">
                                        <h5><a href=""> {{ $item->title }} </a></h5>
                                        {!! $item->description !!}
                                        <a href="/volunteer-form?volunteerID={{ $item->id }}" class="icon-hover">Apply Now <img src="images/next.svg"> </a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection