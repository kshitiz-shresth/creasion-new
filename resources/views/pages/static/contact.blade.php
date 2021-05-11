@extends('layout.app')

@section('title','Contact')

@section('css')
    @livewireStyles
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection

@section('body')
    
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('contact/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Contact</span> Creasion</h5>
            </div>

        </div>
    </div>

    <section class="contact-body pt-50">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="contact-text">
                        <h4 class="heading-text inline "><span>Contact </span>US</h4>

                        <p>Want to get in touch with our team? Fill out our online form and we’ll make sure it gets to the right person. We do our best to respond as quickly as possible!</p>

                        <ul class="contact-info">
                            <li>
                                <i class="icon-phone icons"></i>
                                <div class="contact-info-duo"> 
                                    @php
                                        $phoneNo = explode(",",setting('contact.phoneNo'));
                                        $address = explode("/",setting('contact.address'));
                                    @endphp
                                    @if(count($phoneNo)>0)
                                        @foreach ($phoneNo as $item)
                                            <span> <a href="tel:{{ $item }}">{{ $item }} </a></span>
                                        @endforeach
                                    @endif
                                </div>
                            </li>

                            <li>
                                <i class="icon-home icons"></i>
                                <div class="contact-info-duo">
                                    @foreach ($address as $item)
                                        <span> {{ $item }} </span>
                                    @endforeach
                                </div>
                            </li>

                            <li>
                                <i class="icon-envelope icons"></i>info@creasion.org
                            </li>
                        </ul>

                    </div>
                </div>

                @livewire('contact')
            </div>
            

            
        </div>
    </section>


    <section class="contact-map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.569303443216!2d85.33175291453887!3d27.73058133107849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1910564af905%3A0xe339ae24796cb12b!2sCreasion%20(Centre%20for%20Research%20and%20Sustainable%20Development%2C%20Nepal)!5e0!3m2!1sen!2snp!4v1595791854486!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>


@endsection

