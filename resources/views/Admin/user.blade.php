@extends('Admin/master')
<?php
$a = "suraj";
?>

@section('title',$a)

@section('header') @parent @endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">phone_no</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user1 as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
      <td>{{$i->name}}</td>
      <td>{{$i->email}}</td>
      <td>{{$i->address}}</td>
      <td>{{$i->phone_no}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>









@endsection


@section('footer') @parent @endsection
