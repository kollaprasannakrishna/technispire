@extends('main')

@section('title','Contact')

@section('content')
    <div id="container">
        @include('contact.header')
        @include('contact.getintouchForm')
        @include('contact.googleMap')

    </div>
@stop