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
    @endforeach
    </tbody>
</table>
@endsection


@section('footer') 
@parent 
@endsection
