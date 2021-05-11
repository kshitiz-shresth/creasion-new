@extends('layout.app')

@section('title','Media')

@section('body')
    <div class="creasion-banner resource-banner" style="background: url(/images/stories/banner.jpg);">
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
                <h4 class="heading-text inline"><span>{{ $mediaDetails->title }}</span></h4>
             </div>
        </div>
    </section>
    
    <section class="coverage-titles">
        <div class="container">
            <div class="ct-cov">
                <h5 class="heading-text inline">Print Coverage</h5>
            </div>
            <div class="row">
                @foreach (json_decode($mediaDetails->print_coverages) as $item)
                <div class="col-md-4">
                    <div class="med-cv-wrap">
                        <div class="mew-img">
                            <img src="{{ Kshitiz::printCoverageImage($item->printCoverageID) }}">
                        </div>
                        <div class="mew-text-wrap">

                            <div class="mew-headline">
                                <h5><a href=""> {{ $item->title }}</a></h5>
                            </div>

                            <div class="mew-footer">
                                <h5><i class="icon-calendar icons"></i> <span> {{ $item->date }}</span></h5>
                                <h5>Page No: <span>{{ $item->pageNumber }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            <!-- <div class="news-paginations">
                <ul class="pagination">
                    <li><a class="page-link"><i class="fas fa-long-arrow-alt-left"></i> Previous</a></li>
                    <li><a class="page-link active">01</a></li>
                    <li><a class="page-link">02</a></li>
                    <li><a class="page-link">Next <i class="fas fa-long-arrow-alt-right"></i></a></li>
                </ul>
                
            </div> -->
        </div>
    </section>

    <section class="coverage-titles">
        <div class="container">
            <div class="ct-cov">
                <h5 class="heading-text inline">Online Coverage</h5>
            </div>
            <div class="row">
                @foreach (json_decode($mediaDetails->online_coverages) as $item)
                <div class="col-md-6">
                    <div class="med-cv-wrap med-online-wrap row">
                        <div class="mow-img col-md-3">
                            <img src="{{ Kshitiz::onlineCoverageImage($item->onlineCoverageID) }}">
                        </div>
                        <div class="mew-text-wrap col-md-9">

                                <h5><a href="{{ $item->link }}" target="blank"> {{ $item->title }}</a></h5>

                            
                                <h6><i class="icon-calendar icons"></i> <span> {{ $item->date }}</span></h6>
                        </div>
                    </div>
                </div>
                @endforeach

            <!-- <div class="news-paginations">
                <ul class="pagination">
                    <li><a class="page-link"><i class="fas fa-long-arrow-alt-left"></i> Previous</a></li>
                    <li><a class="page-link active">01</a></li>
                    <li><a class="page-link">02</a></li>
                    <li><a class="page-link">03</a></li>
                    <li><a class="page-link">04</a></li>
                    <li><a class="page-link">Next <i class="fas fa-long-arrow-alt-right"></i></a></li>
                </ul>
                
            </div> -->
        </div>
    </section>



@endsection