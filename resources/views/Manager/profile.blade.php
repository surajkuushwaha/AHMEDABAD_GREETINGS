@extends('Manager/master')
<?php
$a = "Manager";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a
                        href=""
                        data-target="#profile"
                        data-toggle="tab"
                        class="nav-link active"
                        >Profile</a
                    >
                </li>

                <li class="nav-item">
                    <a
                        href=""
                        data-target="#edit1"
                        data-toggle="tab"
                        class="nav-link"
                        >Edit</a
                    >
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Name</h6>
                            <p>
                                {{Auth::user()->name}}
                            </p>
                            <h6>Email</h6>
                            <p>
                                {{Auth::user()->email}}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Address</h6>
                            <?php
                            $u = $user[0];
                            ?>
                            @if(isset($u))
                            {{$u->street}},<br>
                            {{$u->city}},
                            {{$u->state}}<br>
                            Pin code:{{$u->Pin_code}}
                            @else
                            <button
                                type="button"
                                class="btn btn-primary"
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
                            @endif
                        </div>
                        <div class="col-md-6">
                            
                            <h6>Phone No</h6>
                            <p>
                                {{Auth::user()->Phone_no}}
                            </p>
                        </div>
                        <div class="col-md-12">
                            <!-- Button trigger modal -->
                            

                            <!-- Modal -->
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
                                            <h5
                                                class="modal-title"
                                                id="exampleModalLabel"
                                            >
                                                Add Addres
                                            </h5>
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true"
                                                    >&times;</span
                                                >
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="ADDAddress"
                                                method="POST"
                                            >
                                                @csrf
                                                <div class="form-group">
                                                    <label
                                                        for="formGroupExampleInput"
                                                        >Address Line 1</label
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
                                                    <label
                                                        for="exampleFormControlTextarea1"
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
                                                    <div
                                                        class="form-group col-md-5"
                                                    >
                                                        <label for="inputCity"
                                                            >state</label
                                                        >
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="state"
                                                            id="inputCity"
                                                            placeholder="State"
                                                        />
                                                    </div>
                                                    <div
                                                        class="form-group col-md-4"
                                                    >
                                                    <label
                                                    for="formGroupExampleInput"
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
                                                    <div
                                                        class="form-group col-md-3"
                                                    >
                                                       
                                                    </div>
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
                                <!-- Model End -->
                            </div>
                        </div>
                        <!--/row-->
                    </div>

                    <div class="tab-pane" id="edit1">
                        <form method="POST" action="profile/editprofile">
                            @csrf
                            
                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >Name</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="name"
                                        value="{{Auth::user()->name}}"
                                        placeholder="{{Auth::user()->name}}"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >Email</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="email"
                                        name="email"
                                        value="{{Auth::user()->email}}"
                                        placeholder="{{Auth::user()->email}}"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >Address</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="address"
                                        value="{{$u->street}}"
                                        placeholder="{{$u->street}}"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >City</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="city"
                                        value="{{$u->city}}"
                                        placeholder="{{$u->city}}"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >State</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="state"
                                        value="{{$u->state}}"
                                        placeholder="{{$u->state}}"
                                    />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >Pin Code</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="pin_code"
                                        value="{{$u->Pin_code}}"
                                        placeholder="{{$u->Pin_code}}"
                                    />
                                </div>
                            </div>



<!-- 
                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                ></label>
                                <div class="col-lg-3">
                                    <input
                                        class="form-control"
                                        type="text"
                                        value="{{$u->city}}"
                                        placeholder="{{$u->city}}"
                                    />
                                </div>
                                <div class="col-lg-3">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="state"
                                        value="{{$u->state}}"
                                        placeholder="{{$u->state}}"
                                    />
                                </div>
                                <div class="col-lg-3">
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="pin_code"
                                        value="{{$u->Pin_code}}"
                                        placeholder="{{$u->Pin_code}}"
                                    />
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                    >Phone Number</label
                                >
                                <div class="col-lg-9">
                                    <input
                                        class="form-control"
                                        type="number"
                                        value="{{Auth::user()->Phone_no}}"
                                        placeholder="{{Auth::user()->Phone_no}}"
                                        name="phone"
                                        minlength="10"
                                        maxlength="10"
                                    />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-lg-3 col-form-label form-control-label"
                                ></label>
                                <div class="col-lg-9">
                                    <input
                                        type="reset"
                                        class="btn btn-secondary"
                                        value="Cancel"
                                    />
                                    <input
                                        type="submit"
                                        class="btn btn-primary"
                                        value="Save Changes"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img
                    src="//placehold.it/150"
                    class="mx-auto img-fluid img-circle d-block"
                    alt="avatar"
                />
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" />
                    <span class="custom-file-control">Choose file</span>
                </label>
            </div>
        </div>
    </div>

    @endsection @section('footer') @parent @endsection
</div>
