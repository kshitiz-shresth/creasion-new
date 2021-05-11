@extends('layout.app')

@section('title','About Us')

@section('body')
    <section class="abt-banner">
        <div class="creasion-banner resource-banner " style="background: url({{ Voyager::image('about-us/banner.jpg') }});">
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
                        <h4 class="heading-text inline"><span>ENVISIONING THE CHANGE </span>FOR SUSTAINABLE COMMUNITIES  </h4>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="iabs-right pf-zero">
                        <div class="mso-sing">
                            <h4>Our Mission</h4>
                            <p>To build economically empowered and resourceful communities for sustainable development and a healthy environment.</p>    
                        </div>

                        <div class="mso-sing">
                            <h4>Our Vision</h4>
                            <p>To inculcate self- reliance in the communities with a decentralized development approach where the locals and beneficiaries are at the forefront of envisioning and executing the changes desired.</p>    
                        </div>

                        <div class="mso-sing">
                            <h4>Our Objectives</h4>
                            <p>To focus and prioritise social welfare and community development by prioritising economic, social and environment sustainability.</p>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="abt-mission ptb-50">
        <div class="container">
            <h4>Our Approach</h4>

            <div class="row">
                <div class="col-md-4">
                    <div class="approach-card hvr-effect">
                            
                        
                        <img src="/images/about/research.png">
                        <h5>Research</h5>
                        <p>Our projects are an outcome of rigorous research work which helps us have a closer outlook to the issue at hand and develop an organized and efficient outline for our interventions.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="approach-card hvr-effect">
                        
                        <img src="/images/about/create.png">
                        <h5>Create</h5>
                        <p>We plan interventions and create projects that are realistic, achievable and promote collective solutions and sustainable progress by keeping the needs of the beneficiaries at the centre. </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="approach-card hvr-effect">
                        
                        <img src="/images/about/sustain.png">
                        <h5>Sustain</h5>
                        <p>Our primary goal is sustainability, so any projects that we execute- be it major or minor, ensures resiliency and long- term impacts on the communities and beneficiaries. </p>
                    </div>
                </div>

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
                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card ">
                            <img src="/images/about/values/partnership-handshake.svg">
                            <h5>Compassion</h5>
                            <p> We strive towards empathy and increased awareness so that each beneficiary, partner, volunteer and staff members feels connected. </p>
                        </div>
                    </div>

                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card">

                            <img src="/images/about/values/playground.svg">
                            <h5>Playfulness</h5>
                            <p> It inspires creativity within us and unlocks a sense of freedom and fun hence creating a light-hearted and inspiring environment for all  </p>
                        </div>
                    </div>

                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card">

                            <img src="/images/about/values/idea.svg">
                            <h5>Entrepreneurship</h5>
                            <p>  We believe entrepreneurial spirit creates awareness and innovation to address the current environmental and social challenges with more impact. </p>
                        </div>
                    </div>

                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card">

                            <img src="/images/about/values/will.svg">
                            <h5>Courage</h5>
                            <p> Courage is important to us because it challenges our decision and pushes us to take positive steps that others have not dared. </p>
                        </div>
                    </div>

                    <div class="col-md-4 no-pad ">
                        <div class="abv-sing approach-card">

                            <img src="/images/about/values/document.svg">
                            <h5>Transparency</h5>
                            <p> It is the key to strong collaboration across sectors, between organisations and among individuals which promotes clarity and adaptiveness in exploring solutions. </p>
                        </div>
                    </div>

                    <div class="col-md-4 no-pad">
                        <div class="abv-sing approach-card">

                            <img src="/images/about/values/heart.svg">
                            <h5>Humility</h5>
                            <p> We seek to always remain humble as we approach a new project, beneficiary and new volunteers because we acknowledge and appreciate the effort of all. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="words-from" style="background: url(/images/about/founder.jpg);">
        <div class="container">
            <div class="founder-word">
                <h4>Aanand Mishra</h4>
                <h6>FOUNDER AND PRESIDENT</h6>

                <p>A development professional, activist and social entrepreneur who embarked into the journey of social sector at the age of 15 as the National President of “Bal Chetana Samuha”, a child clubs network in Nepal. Throughout his 16 years’ career, he has worked on various development issues for organizations like UN Mission in Nepal and Government of Nepal. More importantly, he founded an organization called CREASION.</p>

                <a href="milestone.html" class="btn-big pri">Know More <img src="/images/next.svg"></a>
            </div>
        </div>
    </section>

@endsection
