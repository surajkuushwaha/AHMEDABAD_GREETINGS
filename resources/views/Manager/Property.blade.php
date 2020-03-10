@extends('Manager/master') @section('title',Auth::user()->name)
@section('header') @parent @endsection @section('content')
<div class="container-fluid">
    <div class="row">
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
            <table id="datatable" class="table border border-info mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">phone_no</th>
                        <th scope="col">role</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                </tbody>
            </table>

            <!-- Modal -->
        </div>
        <div class="col-sm-2">
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
                                Add Property
                            </h5>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
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
        </div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
