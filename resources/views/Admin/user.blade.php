@extends('Admin/master')
<?php
$a = "suraj";
$b;
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table class="table border border-info mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">phone_no</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user1 as $i)
                    <tr>
                        <th scope="row">{{$a=$i->id}}</th>
                        <td>{{$i->name}}</td>
                        
                        <td>{{$i->email}}</td>
                        <td>{{$i->address}}</td>
                        <td>{{$i->phone_no}}</td>
                        <td>{{$i->created_at}}</td>
                        <td>{{$i->updated_at}}</td>
                        <td>
                            <!-- <button class="btn" height="40" width="30" data-toggle="modal" data-target="#edit">
      <img src="{{ asset('svg/edit.svg') }}" alt="no" height="40" width="30">
   </button> -->        
                            <input
                                type="image"
                                src="{{ asset('svg/edit.svg') }}"
                                name="edit"
                                height="40"
                                width="30"
                                data-toggle="modal"
                                data-target="#edit"
                                name="xyz"
                                value="select"
                                
                            />
                            
                            
                            <!-- <input type="image" src="{{ asset('svg/delete.svg') }}" name="delete" height="40" width="30" class="ml-4" > -->
                        </td>
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div
                class="modal fade"
                id="edit"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Edit
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                          
                            <form action="#">
                                <div class="form-group">
                                    <label for="InputName"><?php
                                    echo $a;
                                    ?>
                                      </label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="InputName"
                                        placeholder="Enter name"
                                    />
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <label for="InputEmail"></label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="InputEmail"
                                        placeholder="Enter Email"
                                    />
                                    <small
                                    id="emailHelp"
                                    class="form-text text-muted"
                                    >We'll never share your email with
                                    anyone else.</small
                                >
                                </div>
                                <div class="form-group">
                                    <label for="InputAddress">Address</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="InputAddress"
                                        placeholder="Enter Address"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="InputPhone">Phone No</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="InputPhone"
                                        placeholder="Enter Phone"
                                    />
                                </div>
                                <!-- <button type="submit" class="btn btn-primary">
                                    Submit
                                </button> -->
                            
                          </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save changes
                            </button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>


@endsection @section('footer') @parent @endsection
