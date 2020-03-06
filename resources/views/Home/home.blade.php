@extends('Home/master')
<?php
$a = "home";
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
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Gold Package</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img
                    src="{{ asset('image/silver.png') }}"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Silver Package</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img
                    src="{{ asset('image/bronze.png') }}"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Bronze Package</h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content.
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('footer') @parent @endsection
