@extends('main')

@section('title','Clients')

@section('content')
    <div id="container">
        @include('clients.header')
        @include('clients.clientsContent')
    </div>
@stop