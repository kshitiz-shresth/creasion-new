@extends('layout.app')

@section('title','Blogs')

@section('body')
     <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('blogs/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Our</span> Blogs </h5>
            </div>

        </div>

    </div>
    
    <div id="archive-body" style="position: absolute;top: 352px;"></div>

    <div class="news-archive-body" >
        <div class="news-archive">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-9">
                        <div class="blog-archive">

                            @foreach ($category as $item)
                                @if($loop->first)
                                <a href="/blog#archive-body" class="{{ request('category') ?: 'active' }}">All</a>
                                @endif
                                <a href="?category={{ $item->slug }}#archive-body" class="{{ request('category')==$item->slug ? 'active' : '' }}">{{ $item->title }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="blog-filter">
                            <form method="GET" action="#archive-body">
                                @if(request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                <select name="selected" onchange="this.form.submit()">
                                    <option value="recent" {{ request('selected')=='recent' ? 'selected' : '' }}>Recent First</option>
                                    <option value="oldest" {{ request('selected')=='oldest' ? 'selected' : '' }}>Oldest First</option>
                                    <option value="asc" {{ request('selected')=='asc' ? 'selected' : '' }}>A-Z</option>
                                    <option value="des" {{ request('selected')=='des' ? 'selected' : '' }}>Z-A</option>
                                </select> 
                            </form>
                            
                        </div>
                    </div>
                </div>
             </div>
        </div> 

        <div class="blog-list">
            <div class="container">
                @php $i = 1; @endphp
                @foreach ($blogs as $item)
                {{-- in case of 1,4,7 --}}
                @if($i == 1)
                <div class="blog-single-list bsl-vertical">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="blog-single-img">
                                <img src="{{ Voyager::image($item->image) }}">
                                @if($item->category)
                                <label style="background:{{ $item->category->color }}">{{ $item->category->title }}</label>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="blo-single-text">
                                <h4>{{ $item->title }}</h4>
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

                                <a href="/blog/{{ $item->slug }}" class="icon-hover">Continue Reading <img src="images/next.svg"></a>
                            </div>
                        </div>

                    </div>      
                </div>
                    @php $i++; @endphp
                    <div class="bsl-horizontal">
                        <div class="row">
                @else
                            {{-- in case of 2,3,5,6 --}}
                            <div class="col-md-6 ">
                                <div class="blog-single-list">
                                    <div class="blog-single-img">
                                        <img src="{{ Voyager::image($item->image) }}">
                                        @if($item->category)
                                        <label style="background:{{ $item->category->color }}">{{ $item->category->title }}</label>
                                        @endif
                                    </div>

                                    <div class="blo-single-text">
                                        <h4>{{ $item->title }}</h4>

                                        <div class="art-writer-date">
                                            <h5>By <span>{{ $item->author }}</span></h5>

                                            <h5><i class="icon-calendar icons"></i><span>{{ date('M d, Y',strtotime($item->date)) }}</span></h5>
                                        </div>

                                        <p>{{ strip_tags($item->body) }}</p>

                                        <a href="/blog/{{ $item->slug }}" class="icon-hover">Continue Reading <img src="images/next.svg"></a>

                                    </div>
                                </div>
                            </div>
                    {{-- if it last element of 2 horizontal elements --}}
                    @if($i==3)  
                            @php $i = 1; @endphp 
                        </div>      
                    </div>
                    @else
                        @php $i++; @endphp
                        {{-- incase last element of 2 horizontal elements not available --}}
                        @if($loop->last)
                                </div>      
                        </div>
                        @endif
                    @endif
                    
                @endif

                @endforeach

                <!-- <div class="blog-single-list bsl-vertical">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="blog-single-img">
                                <img src="images/blog/summer.jpg">
                                <label class="blog-field">Field Stories</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="blo-single-text">
                                <h4>Summer Vacation</h4>
                                <div class="art-writer-date">
                                    <h5>
                                        By 
                                        <span>Anika Panth</span>
                                    </h5>

                                    <h5>
                                        <i class="icon-calendar icons"></i>
                                        <span>July 22, 2018</span>

                                    </h5>
                                </div>

                                <p>This summer,  while visiting my family in Nepal, I have gotten the pleasure to work with the Volunteer for Change program at the Center of Research and Sustainable Development Nepal (CREASION). </p>

                                <a href="blog-detail.html" class="icon-hover">Continue Reading <img src="images/next.svg"></a>
                            </div>
                        </div>

                    </div>      
                </div>

                <div class=" bsl-horizontal">
                    <div class="row">

                        <div class="col-md-6 ">
                            <div class="blog-single-list">
                                <div class="blog-single-img">
                                    <img src="images/blog/6.jpg">
                                    <label class="blog-voice">Voice Your Opinions</label>
                                </div>

                                <div class="blo-single-text">
                                    <h4>CIRCULAR ECONOMY: THE SOLUTION TO SUSTAINABILITY</h4>

                                    <div class="art-writer-date">
                                        <h5>By <span>Sushank_D</span></h5>

                                        <h5><i class="icon-calendar icons"></i><span>Nov 10, 2019</span></h5>
                                    </div>

                                    <p>Have you ever wondered about the possibility of your ready- to- throw soda bottles transform into a completely new product? A brand new t-shirt, fleece jackets, sleeping bags, carpets or more bottles perhaps?</p>

                                    <a href="blog-detail.html" class="icon-hover">Continue Reading <img src="images/next.svg"></a>

                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="blog-single-list">
                                <div class="blog-single-img">
                                    <img src="images/blog/3.jpg">
                                    <label class="blog-field">Field Stories</label>
                                </div>
                                <div class="blo-single-text">
                                    <h4>Dhading Journey</h4>
                                    <div class="art-writer-date">
                                        <h5>
                                            By 
                                            <span>LOPSANG D LAMA</span>
                                        </h5>

                                        <h5>
                                            <i class="icon-calendar icons"></i>
                                            <span>Feb. 07, 2020</span>

                                        </h5>
                                    </div>
                                    <p>This is a short extract from our Finance and Admin Officer Lopsang Dorje Lama’s Weekly Progress Report. This week nothing much was done as planned. Sonam had returned from Dhading during the second half of Sunday and went on settling the 2nd and 3rd advance taken for the dhading school project. </p>

                                    <a href="blog-detail.html" class="icon-hover">Continue Reading <img src="images/next.svg"></a> 

                                </div>
                            </div>
                        </div>

                    </div>      
                </div>

                <div class="news-paginations ptb-50">
                    <ul class="pagination">
                        <li><a class="page-link"><i class="fas fa-long-arrow-alt-left"></i> Previous</a></li>
                        <li><a class="page-link active">01</a></li>
                        <li><a class="page-link">02</a></li>
                        <li><a class="page-link">03</a></li>
                        <li><a class="page-link">Next <i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                    
                </div> -->

            </div>
        </div>
    </div>
   
@endsection