@extends('Home/master')
<?php
$a = "Packages";
?>
@section('js')
<link rel="stylesheet" href="{{ asset('js/gold.js') }}" />
@endsection @section('title',$a) @section('header') @parent @endsection
@section('content')
<form id="myform" method="POST" action="#">
    <input type="button" value="-" class="qtyminus" field="quantity" />
    <input type="text" name="quantity" value="0" class="qty" />
    <input type="button" value="+" class="qtyplus" field="quantity" />
</form>

@endsection @section('footer') @parent @endsection
