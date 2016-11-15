@extends('main')

@section('title','About')

@section('content')
    <div id="container">
        @include('aboutus.header')
        <div id="content" class="add-margin-20">
            @include('aboutus.aboutSec')
            @include('landing.portfolio')
            @include('aboutus.counter')
            @include('aboutus.content')

        </div>
    </div>
@stop