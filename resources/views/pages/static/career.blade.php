@extends('layout.app')

@section('title','Career')


@section('body')
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('career/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Vacancy</span> List</h5>
            </div>

        </div>
    </div>


        <section class="how-to-vol ptb-50">
            <div class="container">
                <div class="htv-head">
                    <p>We would love to work with someone innovative, enthusiastic and inquisitive with the will to grow and learn from others. We do not have any vacancies open at the current moment, but if you qualify as an individual with the above-mentioned traits and would want to work with a passionate, dedicated, hardworking and a fun team, keep an eye on this page. </p>    
                </div>
                @if(count(\App\Vacancy::orderBy('order')->get())==0)
                <div class="sorry-text">
                     <h4 class="heading-text text-center">Sorry, no current vacancies</h4>
                </div>
                @else
                <div class="vacancy-list-table">
                    <table >
                      <tr>
                        <th>S.N.</th>
                        <th>Post</th>
                        <th>Apply</th>
                      </tr>
                      @foreach (\App\Vacancy::orderBy('order')->get() as $item)                     
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td><a href="?id={{ $item->id }}#scroll-carrer" class="smoothScroll icon-hover"  >Apply Now<img src="images/next.svg"> </a></td>
                      </tr>
                      @endforeach
                    </table>
                </div>
                @endif
            </div>
        </section>
        @if(request('id'))
        @php
            $vacancy  =  \App\Vacancy::find(request('id'));
        @endphp
        <section class="apply-form" id="scroll-carrer">
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-6">-->
                    <!--    <form action="/getCareer" method="POST" enctype="multipart/form-data">-->
                    <!--        @csrf-->
                    <!--    <div class="carrer-post-form-wrap">-->
                    <!--          <div class="cf-single">-->
                    <!--              <h4>Full Name</h4>-->
                    <!--              <input type="" name="full_name">-->
                    <!--          </div>-->

                    <!--          <div class="cf-single">-->
                    <!--              <h4>Contact Number</h4>-->
                    <!--              <input type="" name="contact_number">-->
                    <!--          </div>-->

                    <!--          <div class="cf-single">-->
                    <!--              <h4>Email</h4>-->
                    <!--              <input type="" name="email">-->
                    <!--          </div>-->

                    <!--          <div class="cf-single">-->
                    <!--              <h4>Upload CV</h4>-->
                    <!--              <input type="file" name="cv">-->
                    <!--          </div>-->

                    <!--          <div class="cf-single">-->
                    <!--              <h4>Cover Letter</h4>-->
                    <!--              <textarea name="cover_letter"></textarea>-->
                    <!--          </div>-->
                    <!--          <button type="submit">Submit <img src="images/next-black.svg"> </button>-->
                    <!--    </div>-->
                       
                    <!--    </form>-->
                    <!--</div>-->
                    
                    <div class="col-md-6">
                        <div class="carrer-post-detail">
                            <h5>Job Title: <span></span></h5>
                            <p>{{ $vacancy->title }}</p>
                            <h5>Educational Qualification: <span></span></h5>
                            <p>{{ $vacancy->educational_qualification }}</p>
                            <h5>Job Specification:</h5>
                            <p>{!! $vacancy->job_specification !!}</p>

                        </div>
                    </div>

                    
                </div>
            </div>
        </section>
        @endif

@endsection