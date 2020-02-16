@extends('Admin/master')
<?php
$a = "suraj";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-flude">
    <div class="row mt-10">
        <div class="col-sm-2">
            <img src="{{ asset('svg/girl.svg') }}" alt="dots" />
        </div>
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Product_id</th>
                        <th scope="col">Product_name</th>
                        <th scope="col">Product_description</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Discount</th>
                        <th scope="col">category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data1 as $i)
                    <tr>
                        <th scope="row">{{$i->id}}</th>
                        <td>{{$i->Product_id}}</td>
                        <td>{{$i->Product_name}}</td>
                        <td>{{$i->Product_description}}</td>
                        <td>{{$i->Amount}}</td>
                        <td>{{$i->Discount}}</td>
                        <td>{{$i->category}}</td>
                    </tr>
                    <input
                                type="image"
                                src="{{ asset('svg/edit.svg') }}"
                                name="edit"
                                height="40"
                                width="30"
                                data-toggle="modal"
                                data-target="#edit"
                                name="xyz"
                                value="select"
                                onclick="select()"
                            />
                    @endforeach
                    <?php
                      function select(){
                        echo "The select function is called.";
                     }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
