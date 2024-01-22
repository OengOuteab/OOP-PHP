@extends('layouts.master')

@section('page')
<h1 class="aaa"><a href="index.html">Add Customer</a></h1>
<div class="dv1">
    <div class="mb-3 row label">
                <label class=" col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                <input type="Text" class="t txtbox form-control" >
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select class="t form-select txtbox" >
                    <option value="1" selected>Male</option>
                    <option value="2">Female</option>
                </select>
                </div>
            </div>
            <div class="mb-3 row label">
                <label class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class=" col-sm-10">
                <input type="date" class="t form-control txtbox">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="Number" class="t form-control txtbox">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <input type="Text" class="t form-control txtbox" >
                </div>
            </div>
        <button class="btn3">Submit</button>
    </div>
@endsection