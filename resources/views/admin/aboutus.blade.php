
@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', 'About Us')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-home"></i>
        About Us
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
<div id="app">

    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <about-us-component></about-us-component>
            </div>
        </div>
    </div>

</div>

@stop

@section('javascript')
    
@stop
