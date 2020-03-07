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
                        <th scope="col">Address_id</th>
                        <th scope="col">street</th>
                        <th scope="col">Pin_code</th>
                        <th scope="col">city</th>
                        <th scope="col">state</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col" colspan="2">Action</th>
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
                        <td>{{$i->updated_at}}</td>
                        <td>
                            <form action="Address/delete" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                    name="bt"
                                    value="{{$i->Address_id}}"
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
                        <td>
                            <form action="Address/edit" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn btn-light"
                                    name="bt"
                                    value="{{$i->Address_id}}"
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2">
            <!--  -->
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
                                Add Address
                            </h5>
                            <!-- <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body">
                            <form action="Address/ADDAddress" method="POST">
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
                                        placeholder="city"
                                    />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity">state</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="state"
                                            id="inputCity"
                                            placeholder="State"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">type</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="inputCity"
                                            name="type"
                                            placeholder="type"
                                        />
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Id</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="inputCity"
                                            name="Id"
                                            placeholder="id"
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

            <!--  -->
        </div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
