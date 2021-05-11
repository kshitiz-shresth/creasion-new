@extends('layout.app')

@section('title','Articles')

@section('body')
    <section class="articles-banner ptb-50">
        <div class="container">
            <div class="art-banner-head">
                <h2 class="heading-text inline"><span>Event</span> Updates</h2>
            </div>

            @foreach ($articles as $item)
                @if($loop->first)
                    <div class="feature-big-news latest-news" >
                        <div class="fbn-img" style="background: url('{{ Voyager::image($item->cover) }}');"></div>

                        <div class="news-heading-big">
                            <h3 class="heading-text"><a href="{{ route('showArticleDetails',$item->slug) }}"> {{ $item->title }}</a></h3>

                            <div class="art-writer-date">
                                <h5>
                                    By 
                                    <span>{{ $item->author }}</span>
                                </h5>

                                <h5>
                                    <i class="icon-calendar icons"></i>
                                    <span>{{ date('M d, Y',strtotime($item->date)) }}</span>

                                </h5>
                            </div>

                            <p>
                               {{ strip_tags($item->body) }}
                            </p>

                            <a href="{{ route('showArticleDetails',$item->slug) }}" class="icon-hover">Read More <img src="/images/next-black.svg"></a>

                        </div>
                    </div>

                    <div class="news-archive">
                        <div class="row">
                            <div class="col-md-3">
                                <h5 class="heading-text inline"><span>News</span> Archive</h5>
                            </div>

                            <div class="col-md-3">
                                <div class="news-archive-date">
                                    <a href="" class="active">2020</a>
                                    <a href="">2019</a>
                                    <a href="">2018</a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="news-search-wrap">
                                    <input type="text" name="" placeholder="Search News">
                                    <a href="" class="search-btn"><i class="icon-magnifier icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-list">
                                        @continue
                @endif
                            <div class="news-list-single">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="nls-img" style="background: url('{{ Voyager::image($item->cover) }}');">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="nls-text">
                                            <h4 class="heading-text"><a href="{{ route('showArticleDetails',$item->slug) }}"> {{ $item->title }} </a></h4>

                                            <div class="art-writer-date">
                                                <h5>
                                                    By 
                                                    <span>{{ $item->author }}</span>
                                                </h5>

                                                <h5>
                                                    <i class="icon-calendar icons"></i>
                                                    <span>{{ date('M d, Y',strtotime($item->date)) }}</span>

                                                </h5>
                                            </div>

                                            <p>{{ strip_tags($item->body) }}</p>

                                            <a href="{{ route('showArticleDetails',$item->slug) }}" class="icon-hover">Read More <img src="/images/next-black.svg"></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                @if($loop->last)
                    </div>
                @endif
            @endforeach

          
    </section>    


@endsection