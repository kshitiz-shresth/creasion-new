
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title'){{ ' | '.setting('site.title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <link rel="shortcut icon" href="{{ asset('images/tlogo.png') }}">
     @include('includes.css')
    @yield('css')
    @yield('meta')
</head>

<body>

    @include('includes.header')


        @yield('body')


    <section class="suscribe-social">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-wrap">
                        <div class="sus-wrap ">
                            <h4>Join Our Newsletter</h4>
                            <p>It’s so wonderful you’ll be joining our community!</p>
                            <iframe src="https://creasion.substack.com/embed" frameborder="0" scrolling="no" height="70"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="social-wrap">
                        <div class="ss-wrap">
                            <div class="ss-card">
                                <i class="fab fa-youtube"></i>
                                
                                <a href="https://www.youtube.com/channel/UCNA27e_7vPFfmrDb5pNt9vQ" target="blank">Subscribe <img src="/images/next-black.svg"></a>
                            </div>

                            <div class="ss-card">
                                <i class="fab fa-facebook-f"></i>
                                <a href="https://www.facebook.com/pg/creasion.nepal/" target="blank">Like <img src="/images/next-black.svg"></a>
                            </div>

                        </div>

                        <div class="ss-wrap">
                            <div class="ss-card">
                                <i class="fab fa-twitter"></i>
                                <a href="https://twitter.com/creasionorg" target="blank">Follow <img src="/images/next-black.svg"></a>
                            </div>

                            <div class="ss-card">
                                <i class="fab fa-linkedin-in"></i>
                                <a href="https://www.linkedin.com/company/creasion/" target="blank">Follow <img src="/images/next-black.svg"></a>
                            </div>
                        </div>

                        <div class="ss-wrap">
                            <div class="ss-card">
                                <i class="fab fa-instagram"></i>
                                <a href="https://www.instagram.com/creasionorg/" target="blank">Follow <img src="/images/next-black.svg"></a>
                            </div>

                            <div class="ss-card">
                                <i class="fab fa-medium-m"></i>
                                <a href="https://medium.com/@vfcnepal" target="blank">Follow <img src="/images/next-black.svg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    
    @include('includes.footer')
    

    <div class="go-top">
        <i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i>
    </div>


 



    @include('includes.js')
    @yield('js')
    <script>
        $(document).ready(function() {
          setTimeout(function() {
            $('#entry>#main>.embed-page').css("background-color", "red");
            console.log('done');
          }, 6000);
        });
    </script>
</body>

</html>