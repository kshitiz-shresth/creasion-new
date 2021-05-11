<footer class="footer-section">

        <div class="container footer-links-wrap">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <img src="{{ asset('images/logo.png') }}">
                        <img src="{{ asset('images/sdg.png') }}">
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="footer-links">
                        <h4>Legal Details</h4>
                        
                        <div class="fo-loc">
                            <h5>DAO Registration No. 221</h5>

                            <h5>PAN No. 304575822</h5>
                            <h5>SWC No. 31502</h5>
                            <h5>KMC Registration No. 762</h5>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="footer-links">
                        <h4>Our Projects</h4>
                         @foreach (\App\Project::orderBy('order')->get() as $item)
                        <a href="{{ route('showProject',Str::slug($item->title)) }}">{{ $item->title }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3 no-pad">
                    <div class="footer-links">
                        <h4>Contact Us</h4>

                        <div class="fo-loc">
                            <h5><span>House No. 260,</span><span>Lamingtan/ Sheetal Marg, Baluwatar</span>
                             P.O. Box: 11772, Kathmandu, Nepal </h5>

                             <h5><a href="tel:+977-1-4420784">+977-1-4420784 /</a><a href="tel:+977-1-4440085">01-4440085</a></h5>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>



        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row ">

                        <div class="col-md-3"></div>
                        <div class="col-md-3 no-pad">
                            <p>© 2021 Creasion.All Rights Reserved</p>
                        </div>


                        <div class="col-md-3">
                            <p >Powered by 
                                <a href="https://www.hueshine.com/" target="_blank">
                                    Hue Shine
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="footer-svg">
            <img src="{{ asset('images/footer.svg') }}">
        </section>
    </footer>