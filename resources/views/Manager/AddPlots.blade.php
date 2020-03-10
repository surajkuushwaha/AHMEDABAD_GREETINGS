@extends('Manager/master')


@section('title',Auth::user()->name)

@section('header') @parent @endsection
@section('content')




@endsection

@section('footer') @parent @endsection
