@extends('Admin/master')
<?php
$a = "suraj";
$d = $data[0];
// print_r($data[0]->input());
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 ">
<form action="finaledit" method="POST">
            <!-- <input type="hidden" value="{{$d->Address_id}}" name="id" /> -->
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput"
                                        >street</label
                                    >
                                    <input
                                        type="text"
                                        name="street"
                                        class="form-control"
                                        id="formGroupExampleInput"
                                        placeholder="Street"
                                        value="{{$d->street}}"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                        >city</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="inputCity"
                                        name="city"
                                        value="{{$d->city}}"
                                        placeholder="city"
                                    />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">state</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="state"
                                            id="inputCity"
                                            placeholder="State"
                                            value="{{$d->state}}"
                                        />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">type</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="inputCity"
                                            name="type"
                                            placeholder="type"
                                            value="{{$d->type}}"
                                        />
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput"
                                        >pin code</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="formGroupExampleInput"
                                        placeholder="Product Category"
                                        name="pin_code"
                                        value="{{$d->Pin_code}}"
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                
                            </form>
                            </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection @section('footer') @parent @endsection