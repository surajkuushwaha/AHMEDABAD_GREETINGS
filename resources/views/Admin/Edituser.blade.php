@extends('Admin/master')
<?php
$a = $data[0];
?>

@section('title',$a->name) @section('header') @parent @endsection @section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            @foreach($data as $i)
                    <form action="/finaledit" method="POST">

                                        @csrf
                                        <input type="hidden" value="{{$i->id}}" name="id">
                                        <div class="form-group">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" value="{{$i->email}}" placeholder="{{$i->email}}" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" value="{{$i->name}}" placeholder="{{$i->name}}" name="name">
                                        </div>
                                        <input type="hidden" value="{{$i->address_id}}" name="address_id">
                                        @foreach($address as $j)
                                        @if($i->address_id == $j->Address_id)
                                        <div class="form-group">
                                            <label for="inputAddress2">Address</label>
                                            <input type="text" class="form-control" id="inputAddress2" value="{{$j->street}}" name="address_street" placeholder="{{$j->street}}">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity" value="{{$j->city}}" placeholder="{{$j->city}}" name="address_city">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <input type="text" class="form-control" value="{{$j->state}}" placeholder="{{$j->state}}" name="address_State">
                                                
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Pin code</label>
                                                <input type="text" class="form-control" value="{{$j->Pin_code}}" placeholder="{{$j->Pin_code}}" name="address_Pin_code">
                                            </div>
                                        </div>
                                        @endif @endforeach
                                        
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Phone No</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{$i->Phone_no}}" placeholder="{{$i->Phone_no}}" name="phone">
                                        </div>
                            
                                <button type="submit" class="btn btn-primary">Update</button>
                                
                            
                                
                    </form>
            @endforeach


           
        </div>
        <div class="col-sm-2">
            
        </div>
    </div>
</div>


@endsection @section('footer') @parent @endsection