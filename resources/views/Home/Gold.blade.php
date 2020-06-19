@extends('Home/master')
<?php
$a = "Packages";
?>
@section('css')
<link rel="stylesheet" href="{{ asset('css/product/gold.css') }}" />
@endsection @section('title',$a) @section('header') @parent @endsection
@section('content')
<div class="container-flude">
    <div class="row mt-10">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
<form  method="POST" action="#">
    <table class="table border border-info mt-3">
        <thead>
            <tr>
                <th scope="col">Product name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Amount</th>
                <th scope="col">Discount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i)
            <tr>
                <td>{{$i->Product_name}}</td>
                <td>{{$i->Product_description}}</td>
                <td>{{$i->Amount}}</td>
                <td>{{$i->Discount}}</td>
                <td>
                    <label class="switch">
                        <input type="checkbox" />
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
</div>
<div class="col-sm-2"></div>
</div>
</div>
</div>

@endsection @section('footer') @parent @endsection
