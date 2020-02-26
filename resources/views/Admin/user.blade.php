@extends('Admin/master')
<?php
$a = "suraj";
?>

@section('title',$a) @section('header') @parent @endsection @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <table id="datatable" class="table border border-info mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">phone_no</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user1 as $i)
                    <tr>
                        <th scope="row">{{$i->id}}</th>
                        <td>{{$i->name}}</td>
                        <td>{{$i->email}}</td>
                        <!-- data -->
                        
                        <td>@foreach($address as $j)
                            @if($i->address_id == $j->Address_id)
                            {{$j->street}}
                            {{$j->city}}
                            {{$j->state}}
                            {{$j->Pin_code}}
                            @endif
                            
                        @endforeach</td>
                        <td>{{$i->Phone_no}}</td>
                        <td>{{$i->created_at}}</td>
                        <td>{{$i->updated_at}}</td>
                        <td>
                            <form action="user/edituser" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="btn btn-light"
                                    name="bt"
                                    value="{{$i->id}}"
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
                            <form action="user/deleteuse" method="POST">
                            @csrf
                                <button
                                    class="btn btn-danger"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    value="{{$i->id}}"
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

            <!-- Modal -->
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection @section('footer') @parent @endsection
