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
                        <th scope="col">Manager_id</th>
                        <th scope="col">email</th>
                        <th scope="col">Phone_no</th>
                        <!-- <th scope="col">email_verified_at</th> -->
                        <th scope="col">verified</th>
                        <th scope="col">created_at</th>
                        <th scope="col">created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i)
                    <tr>
                        <th scope="row">{{$i->Manager_id}}</th>
                        <td>{{$i->email}}</td>
                        <td>{{$i->Phone_no}}</td>
                        <!-- <td>{{$i->email_verified_at}}</td> -->
                        <td>{{$i->verified}}</td>
                        <td>{{$i->created_at}}</td>
                        <td>{{$i->created_at}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        
        </div>
        <div class="col-sm-2">
        
            
            </div>
        </div>
    </div>


@endsection @section('footer') @parent @endsection