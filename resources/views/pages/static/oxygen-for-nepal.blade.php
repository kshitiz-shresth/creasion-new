@extends('layout.app')

@section('title','COVID-19 RESPONSE')

@section('body')

        <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="donateMhead">You can donate to</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="donate-bank">
                        <h4>NMB Bank</h4>
                        <h6>Boudha Branch </h6>
                        <h6>Swift Code: NMBBNPKA</h6>
                        <h6>Accout Name: Center for Research and Sustainable Development Nepal </h6>
                        <h6>A/C - 1510142939500013 </h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>

        <div class="creasion-banner inner-banner" style="background: url(images/covid-response/oxygenfornepal.jpg);">
            <div class="banner-overlay"></div>
            <div class="container">
                <div class="cb-content">
                    <div class="bread-crumbs">
                        <h6><label href="">Oxygen For Nepal</label></h6>
                    </div>

                    <h4 class="heading-text inline"><span>Saving Lives </span>, One Oxygen Cylinder At a Time </h4>
                    <a href="#" class="btn-big pri" data-toggle="modal" data-target="#donateModal" >Donate Now <img src="images/next.svg"> </a>
                </div>
            </div>
        </div>

        <section class="inner-about-style3 ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="iabs-left">
                            <h4 class="heading-text inline">
                            <span>The second wave of COVID-19 pandemic has created a health crisis in Nepal.</span> The Test Positivity Rate (TPR) after
                            mid-April is almost 50% which is 10 times higher than the threshold of 5 % recommended by WHO. On an average,
                            over 8000 have tested positive since the beginning of May and the demand for health infrastructures
                            such as oxygen cylinders, concentrators, ICU beds and ventilators is increasing. 
                            </h4>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="iabs-right">
                            <p>
                            Nepal has already plunged deep into the second wave of COVID 19 and the rate of infections will only grow uncontrollably in the coming days. The ongoing scenario assumes a health catastrophe similar or even worse than what India has been facing since weeks.

                            </p>

                            <p>
                               CREASION has stepped forward to avert this crisis in any way possible. The initiative primarily aims to manage necessary health infrastructures and provide them to those in critical need- hospitals and individuals alike. We believe emergency preparedness and response is the need of the hour and through effective fund collection and channelization, the initiative will make an effort to fight against COVID-19 in Nepal. 

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-about ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="right-slider">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            What is Oxygen for Nepal?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            Oxygen for Nepal is one of the interventions of COVID Alliance for Nepal that has been initiated and led by CREASION. CREASION through its years of experience in disaster management as first responders has ideated this project to primarily fill the demand and supply gap of oxygen cylinders in response to the COVID-19 crisis.

                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            How will Oxygen for Nepal manage cylinders since logistics and procurement is already a challenge during this crisis?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            We plan to channelize our funds in procuring oxygen cylinders from abroad. For this we have already started coordination with international vendors.

                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            How will funds be collected for the procurement?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            Oxygen for Nepal is a collaborative initiative which CREASION aims to take forward through the support from interested individual donors from Nepal and abroad. The total cost of one cylinder including the regulator, cannula, freight and distribution cost is $395.Our target is collection of at least $395,000 for a tentative procurement of at least 1000 cylinders.

                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            What is the mechanism for fund collection?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            We have partnered with banks for collection of funds from national donors. One can deposit any amount that they like to our bank and help the initiative. For the international diaspora, we have created a GoFundMe profile for collection of donations.

                                            We assure you our reliability and transparency and can vouch that none of the funds will be mismanaged and 100% of it will be channelized for the procurement and dispatch of cylinders.
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            How is the dispatch planned?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            Anybody in need of oxygen or oxygen cylinders can come in contact with us. However, one needs to submit a doctor’s prescription for verification of the need and urgency of the resource. Demand is high but since the supply is limited, we want to ensure that every distribution goes to the hospital or patient who needs it the most. 

                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            Do we need to provide any charge for receiving the cylinders?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            Oxygen for Nepal does not charge any amount for its cylinders
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            If my case is genuine and provide medical prescription, will I be guaranteed cylinders according to my need?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            We try our best to cater to everybody’s requirement. However, as we know that as cases are surging day by day, demand for oxygen is also rising rapidly. If requests exceed our supply stock, we cannot guarantee cylinders. In such a case, we do ensure that we connect your request to other groups and entities who might have possible leads for cylinders.
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            Besides, procurement and distribution of Oxygen, are there any COVID-19 response initiatives planned by CREASION?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                            Oxygen for Nepal has been planned analyzing the urgent need for oxygen in the current scenario. Besides this, we are also working for setting up Isolation Center and a COVID-19 Response Resource. Isolation center will be equipped with necessary health care facilities such as supplementary oxygen, health care workers, medicines and basic facilities for patients with mild and moderate symptoms that do not require critical treatment. The COVID-19 Response Resource will provide protective gear such as PPEs, medical masks, gloves, goggles, shoe and head cover, sanitizers, and disinfectants to frontline workers.

                                            </span>
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-impacts number-counter-section ptb-50">
            <div class="container">
                <h4 class="heading-text inline text-center"><span>Our </span>  Impacts</h4>
                <div class="padding-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                            <img src="images/icon/rfc/oxygen_cylinder.svg" />
                                <h2>
                                    <span class="odometer" data-count="35">00</span>

                                </h2>

                                <h4 class="counter-subhead">Cylinders <label>Distributed </label></h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/oxygen_refill.svg" />
                                <h2>
                                    <span class="odometer" data-count="24 ">00</span>
                                </h2>

                                <h4 class="counter-subhead">cylinders<label> Refilled </label></h4>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/hospital.svg" />
                                <h2>
                                    <span class="odometer" data-count="5000">00</span>
                                    <span class="odo-sign">+</span>
                                </h2>

                                <h4 class="counter-subhead">Requests  <label> Addressed   </label></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




@endsection
