
@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
@stop

@section('page_title', 'HomePage')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-home"></i>
        Livewire
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
<livewire:trial />
@stop

@section('javascript')
@livewireScripts
<script>
    Livewire.on('alert', param => {
        toastr[param['type']](param['message']);
    });
</script>
@stop
