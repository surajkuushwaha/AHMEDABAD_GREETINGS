@extends('Admin/master')
<?php
$a = "suraj";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-flude">
    <div class="row mt-10">
        <div class="col-sm-2">
            
        </div>
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Address_id</th>
                        <th scope="col">street</th>
                        <th scope="col">Pin_code</th>
                        <th scope="col">city</th>
                        <th scope="col">state</th>
                        <th scope="col">created_at</th>
                        <th scope="col">created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data1 as $i)
                    <tr>
                        <th scope="row">{{$i->Address_id}}</th>
                        <td>{{$i->street}}</td>
                        <td>{{$i->Pin_code}}</td>
                        <td>{{$i->city}}</td>
                        <td>{{$i->state}}</td>
                        <td>{{$i->created_at}}</td>
                        <td>{{$i->created_at}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
