@extends('greetings/master')
<?php
$a = "suraj";
?>


@section('css') 
<link rel="stylesheet"href="{{ asset('css/show.css') }}" type="text/css">
@endsection
@section('title',$a)
@show
@section('header') @parent @endsection
@section('content')
<section class="some">
            <img src="{{ asset('svg/circles.svg') }}" alt="dots" />
            <h1>Dots</h1>
        </section>
@endsection


@section('footer') @parent @endsection
