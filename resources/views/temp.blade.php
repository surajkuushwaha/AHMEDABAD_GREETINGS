@extends('greetings/master')
<?php
$a = "suraj";
?>
 
@section('title',$a) 
@section('header')@parent@endsection

@section('content')
<div>hello</div>











@endsection


@section('footer') @parent @endsection

