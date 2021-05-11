@extends('layout.app')

@section('title','Partner With Us')

@section('css')
    @livewireStyles
@endsection

@section('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection

@section('body')
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('partner-with-us/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="cb-content">
                <h5 class="heading-text inline"><span>Partner With</span> Us </h5>
            </div>

        </div>
    </div>

    <section class="volunteerr-form partner-text ptb-50">
        @livewire('partner-with-us')
    </section>


@endsection