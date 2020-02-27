@extends('Admin/master')
<?php
$a = "suraj";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-flude">
    <div class="row mt-10">
        <div class="col-sm-2">
        <button
                type="submit"
                class="btn btn-outline-success "
                style="margin-top: 10px ; width: 150px;"
                data-toggle="modal"
                data-target="#exampleModal"
            >
                <img
                    src="{{ asset('svg/add.svg') }}"
                    alt="ds"
                    height="40"
                    width="30"
                />ADD
            </button>
            
        </div>
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product_id</th>
                        <th scope="col">Product_name</th>
                        <th scope="col">Product_description</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Discount</th>
                        <th scope="col">category</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data1 as $i)
                    <tr>
                        <td scope="row">{{$i->Product_id}}</td>
                        <td>{{$i->Product_name}}</td>
                        <td>{{$i->Product_description}}</td>
                        <td>{{$i->Amount}}</td>
                        <td>{{$i->Discount}}</td>
                        <td>{{$i->category}}</td>
                        <td>
                            <form action="#" method="POST">
                                @csrf
                                <button
                                    class="btn btn-success"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    value="{{$i->id}}"
                                    name="bt"
                                >
                                    <img
                                        src="{{ asset('svg/edit.svg') }}"
                                        alt="ds"
                                        height="40"
                                        width="30"
                                    />
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="product/delete" method="POST">
                                @csrf
                                <button
                                    class="btn btn-danger"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    value="{{$i->Product_id}}"
                                    name="bt"
                                >
                                    <img
                                        src="{{ asset('svg/delete.svg') }}"
                                        alt="ds"
                                        height="40"
                                        width="30"
                                    />
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">
            <img src="{{ asset('svg/girl.svg') }}" alt="dots" />

            <!-- model -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Add Products
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="product/add" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="formGroupExampleInput"
                                        >Product Name</label
                                    >
                                    <input
                                        type="text"
                                        name="Product_name"
                                        class="form-control"
                                        id="formGroupExampleInput"
                                        placeholder="Product Name"
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
                                        placeholder="Product Description"
                                    ></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Amount</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="Amount"
                                            id="inputCity"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Discount</label>
                                        <input
                                            type="text"
                                            name="Discount"
                                            class="form-control"
                                            id="inputCity"
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput"
                                        >category</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="formGroupExampleInput"
                                        placeholder="Product Category"
                                        name="category"
                                    />
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-dismiss="modal"
                                    >
                                        Close
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
