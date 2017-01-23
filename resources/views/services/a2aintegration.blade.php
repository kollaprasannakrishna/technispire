@extends('main')

@section('title','A2A Integration')

@section('content')
    <div id="container">
        @include('a2aintegration.header')
        @include('a2aintegration.intro')
        @include('a2aintegration.features')
        @include('a2aintegration.content2')

        @include('a2aintegration.experience')

    </div>
@stop