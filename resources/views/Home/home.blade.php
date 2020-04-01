@extends('Home/master')
<?php
$a = "Packages";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div
    class="container"
    style="display:flex; position: absolut; top: 0; bottom: 0; right: 0; left: 0;"
>
    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <div class="card " style="width: 18rem;">
                <img
                    src="{{ asset('image/gold.png') }}"
                    class="card-img-top"
                    alt="GOLD"
                />
                <div class="card-body">
                    <h5 class="card-title">Gold Package</h5>
                    <p class="card-text">
                       This pack can be used For Bigger Celebrations.It can be Used for Buisness Parties, Anniversary.It contains Everything in a single pack.
                    </p>
                    <a href="{{url('/Package/Gold')}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img
                    src="{{ asset('image/silver.png') }}"
                    class="card-img-top"
                    alt="SILVER"
                />
                <div class="card-body">
                    <h5 class="card-title">Silver Package</h5>
                    <p class="card-text">
                    This package is also known to be a Value For Money package.This pack can be used for Normal Birthday Parties, Anniversary.
                    </p>
                    <a href="{{url('')}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img
                    src="{{ asset('image/bronze.png') }}"
                    class="card-img-top"
                    alt="BRONZE"
                />
                <div class="card-body">
                    <h5 class="card-title">Bronze Package</h5>
                    <p class="card-text">
                        This is the most Economical Pack for Our Users as it can be used for Small Parties, Get-together, College Celebration.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('footer') @parent @endsection
