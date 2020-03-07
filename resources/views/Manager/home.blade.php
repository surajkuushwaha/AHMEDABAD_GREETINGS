@extends('Manager/master')
<?php
$a = "Manager";
?>

@section('title',$a)

@section('header') @parent @endsection
@section('content')
<?php
$d=$data[0];
print_r($d->Manager_id);
print_r($d->email);
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
EDIT PROFILE</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" id="Name" class="form-control" placeholder="Enter Name">
  </div>
<div class="form-group">
    <label for="Email">Email ID</label>
    <input type="email" class="form-control" id="Email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="Address" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone No.</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

@endsection


@section('footer') @parent @endsection
