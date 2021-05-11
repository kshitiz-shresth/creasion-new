@extends('layout.app')

@section('title','Donate')


@section('body')
    <section class="donate-banner">
        <div class="row no-gutter align-items-center">
            <div class="col-md-6 no-pad">
                <div class="donate-img">
                    <img src="{{ Voyager::image('donate/banner.jpg') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="donate-text">
                    <h5 class="heading-text inline"><span>Offer your help </span> to fight Covid-19</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="donate-detail ">
            <div class="row no-gutter">
                <div class="col-md-6 no-pad">
                    <div class="donate-det-half ddh-left">
                        <h5 class="heading-text"><span> Your assistance can be instrumental to:</span> </h5>
                        <ul>
                            <li><img src="images/donate-rebuild.svg"><h5> Help rebuild resilient communities </h5> </li>
                            <li><img src="images/donate-medical.svg"> <h5>Provide medical assistance to waste workers </h5> </li>
                            <li><img src="images/donate-train.svg"> <h5> Sponsor a Waste Smart Club Child’s education</h5> </li>
                            <li><img src="images/donate-student.svg"><h5> Reach out to more young students with Empower+ </h5></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 no-pad ">
                    <div class="donate-det-half ddh-right" >
                        <h5 class="heading-text inline"><span>Any amount counts!<br> Help us create more influential impacts.<br>You Can Donate to</span>  </h5>

                        <div class="donate-bank">
                            <h4>Siddhartha Bank</h4>
                            <h6>Thamel Branch </h6>
                            <h6>Swift Code: SIDDNPKA</h6>
                            <h6>Currency: NPR</h6>
                            <h4 class="bank-account">A/C - 01615323565 </h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection