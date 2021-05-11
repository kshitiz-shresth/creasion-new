    <header id="header">
        <div class="navbar-area  ">
            <div class="creasion-responsive-nav">
                <div class="container ">
                    <div class="creasion-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ Voyager::image(setting('site.logo')) }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="creasion-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md">
                        <a class="navbar-brand" href="/">
                            <img src="{{ Voyager::image(setting('site.logo')) }}" >
                        </a>
                        @php
                            $s = Request::segment(2);
                            if(preg_match_all('/\b(\w)/',$s,$m)) {
                            $v = implode('',$m[1]); // $v is now SOQTU
                            }
                        @endphp    
                        @if(Request::segment(1)=="projects") 
                        <a class="navbar-brand" href="/">
                                <img src="/storage/icons/{{ $v }}.png">
                        </a>
                        @endif
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">


                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        About
                                    </a>
                                    <ul class="dropdown-menu project-dropdown iv-four-col">

                                        <li class="nav-item nav-wss">
                                            <a href="/about-us" class="nav-link">
                                                <img src="{{ url('images/aboutus.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>About Us</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rec">
                                            <a href="team" class="nav-link">
                                                <img src="{{ url('images/slider/bigimg6.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Team</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rfc">
                                            <a href="{{ route('our-history') }}" class="nav-link">
                                                <img src="{{ url('images/history.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Our History</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-wfc">
                                            <a href="{{ route('partners') }}" class="nav-link">
                                                <img src="{{ url('images/partners-cover.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Partners</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Projects 
                                    </a>
                                    <ul class="dropdown-menu project-dropdown">
                                        @foreach (\App\Project::orderBy('order')->get() as $item)
                                            <li class="nav-item nav-vfc">
                                                <a href="{{ route('showProject',Str::slug($item->title)) }}" class="nav-link">
                                                    <img src="{{ Voyager::image($item->menuImage) }}" class="nav-img">
                                                    <div class="nav-overlay"></div>
                                                    <span>{{ $item->title }}</span>
                                                </a>
                                            </li>   
                                        @endforeach
                                    </ul>
                                </li>

                                

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Resources 
                                    </a>

                                    <ul class="dropdown-menu project-dropdown">
                                        <li class="nav-item nav-vfc">
                                            <a href="/media" class="nav-link">
                                                <img src="{{ url('images/icon/new.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Media</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-wss">
                                            <a href="{{ route('showArticles') }}" class="nav-link">
                                                <img src="{{ url('images/icon/media.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Event Updates</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rec">
                                            <a href="/blog" class="nav-link">
                                                <img src="{{ url('images/icon/blog.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Blog</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rfc">
                                            <a href="/stories" class="nav-link">
                                                <img src="{{ url('images/instagram/5.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Stories</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-wfc">
                                            <a href="/downloads" class="nav-link">
                                                <img src="{{ url('images/instagram/2.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Downloads</span>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="/oxygen-for-nepal" class="nav-link">
                                        Covid-19 Response
                                        <span class="blink-nav"></span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
                                        Contact
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Get Involved
                                    </a>

                                    <ul class="dropdown-menu project-dropdown iv-four-col">

                                        <li class="nav-item nav-wss">
                                            <a href="/donate" class="nav-link">
                                                <img src="{{ url('images/instagram/3.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Donate</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rec">
                                            <a href="/partner-with-us" class="nav-link">
                                                <img src="{{ url('images/icon/blog.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Partner With Us</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-rfc">
                                            <a href="/volunteer-with-us" class="nav-link">
                                                <img src="{{ url('images/instagram/5.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Volunteer With Us</span>
                                            </a>
                                        </li>

                                        <li class="nav-item nav-wfc">
                                            <a href="/career" class="nav-link">
                                                <img src="{{ url('images/instagram/2.jpg') }}" class="nav-img">
                                                <div class="nav-overlay"></div>
                                                <span>Work With Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>