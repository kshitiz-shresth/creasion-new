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
                            <h4 class="heading-text inline"><span>An initiative taken in response</span> to the growing threat of the second wave of COVID-19 in Nepal that is projected to create massive shortage of oxygen cylinders and impact recovery of infected patients</h4>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="iabs-right">
                            <p>
                                Nepal has already plunged into the second wave of COVID-19 and the rate of infections are projected to grow uncontrollably in the coming days. Since late April, at least 3000 people are infected daily in Nepal and the test positivity rate has grown to 34.4%. This statistic predicts a deadly scenario for Nepal and assumes a health catastrophe similar to what India has been facing since weeks.  

                            </p>

                            <p>
                                Oxygen for Nepal aims to avert this crisis and ready oxygen cylinders for emergency use for infected patients if and when required. Currently the production capacity of Nepal is 8000 cylinders per day and the demand stands at 4500-5000 cylinders per day. Although there are 70,000-80,000 oxygen cylinders at stock, there is shortage of 40,000 cylinders to address the COVID-19 pandemic. This initiative aims to fill this gap and ensure cylinder shortage does not claim the lives of anybody.
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
                                            What is the operation modality of Oxygen for Nepal?
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                                The initial process is fundraising for the cylinders. We aim to collect $500,000 for 5000 cylinders through crowdfunding. The funds will be channelised for the purchase of oxygen cylinders which will be distributed through hubs established in different locations around Nepal.  
                                
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            Where is the project intervention based?  
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                                For now, we plan to pilot our project in Kathmandu, Birgunj and Nepalgunj, the three hotspots of COVID-19 in Nepal. For coordination, hubs will be formed in the respective locations and dispatch will be done accordingly.      
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            What is the procedure for obtaining the cylinders?  
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                                Oxygen for Nepal will identify and come in contact with hospitals with high number of COVID-19 patients. Further, critically ill patients and frontline workers will also be considered upon request. According to their requirement, cylinders will then be provided on minimum cost.      
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            How many cylinders does Oxygen for Nepal plan to acquire?  
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                                Our initial fundraising plans to acquire 5000 oxygen cylinders. Out of the 5000 cylinders, 2000 cylinders will be filled with gas. The remaining will be filled in coordination with oxygen manufacturers.      
                                            </span>
                                        </p>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i><img src="images/caret.png" /></i>
                                            Who are the main coordinators of the project?  
                                        </a>

                                        <p class="accordion-content">
                                            <span>
                                                Citizens Alliance Against COVID-19, a consortium of different organizations and volunteers and CREASION are implementing this project to overcome the shortage of oxygen cylinders in Nepal.       
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
                <h4 class="heading-text inline text-center"><span>Our Expected</span>  Impacts</h4>
                <div class="padding-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/money.svg" />
                                <h2>
                                    <span class="odometer" data-count="50">00</span>
                                    <span class="odo-sign">M+</span>
                                </h2>

                                <h4 class="counter-subhead">Funds<label> Raised</label></h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/oxygen_cylinder.svg" />
                                <h2>
                                    <span class="odometer" data-count="5000 ">00</span>
                                </h2>

                                <h4 class="counter-subhead">oxygen cylinders<label> purchased</label></h4>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/oxygen_refill.svg" />
                                <h2>
                                    <span class="odometer" data-count="2000">00</span>
                                </h2>

                                <h4 class="counter-subhead">oxygen cylinders <label>filled with gas</label></h4>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div class="pr-imp-card mtb-25">
                                <img src="images/icon/rfc/hospital.svg" />
                                <h2>
                                    <span class="odometer" data-count="20">00</span>
                                    <span class="odo-sign">+</span>
                                </h2>

                                <h4 class="counter-subhead">hospitals <label> assisted  </label></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    
@endsection