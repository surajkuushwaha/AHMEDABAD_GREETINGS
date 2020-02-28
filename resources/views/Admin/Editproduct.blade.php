@extends('Admin/master')
<?php
$a = "Product";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 ">
            @foreach($data as $i)
            <form
                action="/finaleditproduct"
                method="POST"
                style="margin: 10px;"
            >
                @csrf
                <input type="hidden" value="{{$i->Product_id}}" name="id" />
                <div class="form-group ">
                    <label for="formGroupExampleInput">Product Name</label>
                    <input
                        type="text"
                        name="product"
                        class="form-control"
                        id="formGroupExampleInput"
                        placeholder="{{$i->Product_name}}"
                        value="{{$i->Product_name}}"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"
                        >Product Description</label
                    >
                    <textarea
                        class="form-control"
                        name="Product_description"
                        id="exampleFormControlTextarea1"
                        rows="3"
                        placeholder="{{$i->Product_description}}"
                        >{{$i->Product_description}}</textarea
                    >
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Amount</label>
                        <input
                            type="text"
                            class="form-control"
                            name="Amount"
                            id="inputCity"
                            value="{{$i->Amount}}"
                            placeholder="{{$i->Amount}}"
                        />
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Discount</label>
                        <input
                            type="text"
                            name="Discount"
                            class="form-control"
                            id="inputCity"
                            value="{{$i->Discount}}"
                            placeholder="{{$i->Discount}}"
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">category</label>
                    <input
                        type="text"
                        class="form-control"
                        id="formGroupExampleInput"
                        placeholder="{{$i->category}}"
                        name="category"
                        value="{{$i->category}}"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            @endforeach
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
