@extends('layout.app')

@section('title','Volunteer With Us')

@section('css')
    @livewireStyles
@endsection

@section('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection

@section('body')
    <div class="creasion-banner resource-banner" style="background: url({{ Voyager::image('volunteer-form/banner.jpg') }});">
        <div class="banner-overlay"></div>
        <div class="container">

            <div class="cb-content">

                <h5 class="heading-text inline"><span>Volunteer With</span> Us </h5>
            </div>

        </div>
    </div>  


    @livewire('volunteer-form', ['myID'=>request('volunteerID')])



@endsection