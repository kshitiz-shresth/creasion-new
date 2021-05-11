@extends('layout.app')

@section('title','Downloads')


@section('body')
      <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('downloads/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">
                <h5 class="heading-text inline"><span>Downloads</span> </h5>
            </div>

        </div>
    </div>

    @foreach ($categories as $item)
    <section class="reports-body ptb-50">
        <div class="container">
            <h4 class="heading-text inline">
                <span>{{ explode(' ',$item->title)[0].' ' }}</span>{{ explode(' ',$item->title)[1] }}
            </h4>

            <div class="row">
                @foreach ($item->downloads as $downloadItem)
                <div class="col-md-3 col-sm-6">
                    <div class="report-card">
                        <div class="report-img">
                            <img src="{{ Voyager::image($downloadItem->image) }}">
                            <a href="{{ isset(json_decode($downloadItem->file)[0]->download_link) ? '/storage/'.json_decode($downloadItem->file)[0]->download_link :  Voyager::image($downloadItem->image) }}" target="blank"><i class="icon-cloud-download icons"></i> Download</a>
                        </div>
                        @if($downloadItem->title)
                        <h5>{{ $downloadItem->title }}</h5>
                        @endif
                        
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
    @endforeach
  
@endsection