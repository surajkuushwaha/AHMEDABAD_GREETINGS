@extends('Manager/master')
<?php
$a = "Manager";
?>

@section('title',$a)

@section('header') @parent @endsection
@section('content')
<?php
$d=$data[0];
print_r($d->email);
?>
