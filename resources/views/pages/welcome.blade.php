@extends('main')

@section('title','Home')
@section('content')
    @include('partials._carousel')
    <!-- Start content -->
    <div id="content">
        <div class="container">
            <div class="row">
                @include('landing.portfolio')
                @include('landing.services')
            </div>
        </div>
    </div>
    <!-- Divider -->
    <div  style="margin-top:25px; margin-bottom:45px;"></div>
                {{--@include('landing.skills')--}}
                @include('landing.middlebanner')
    <div id="content">
        <div class="container">
            <div class="row">
                @include('landing.shortAboutUs')
            </div>
        </div>
    </div>


@stop