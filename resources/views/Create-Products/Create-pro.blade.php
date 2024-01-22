@extends ('layouts.master')
@section('page')
<h1 class="aaa"><a href="index.html">Create Product</a></h1>

 <div class="mb-3 row label">
                <label for="txt_firstname" class=" col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                <input type="Text" class="txtbox form-control" name="txt_firstname">
                </div>
            </div>
            <div class="mb-3 row label">
                <label for="txt_lastname" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                <input type="Text" class="form-control txtbox" name="txt_lastname">
                </div>
            </div>
            <div class="mb-3 row label">
                <label  class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select class="form-select txtbox" name ="sl_gender" >
                    <option value="1" selected>Male</option>
                    <option value="2">Female</option>
                </select>
                </div>
            </div>
            <div class="mb-3 row label">
                <label for="txt_dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class="col-sm-10">
                <input type="date" class="form-control txtbox" name="txt_dob">
                </div>
            </div>
            <div class="mb-3 row label">
                <label for="txt_phonenum" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                <input type="Number" class="form-control txtbox" name="txt_phonenum">
                </div>
            </div>
            <div class="mb-3 row label">
                <label for="txt_email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="Text" class="form-control txtbox" name="txt_email">
                </div>
            </div>
            <div class="dv">
    <button class="btn1">Select</button>
    <input type="Text" class="ip">
    <button class="btn1">Add</button>
    <button class="btn1">delete</button>
    <button class="btn1">Edit</button>

    
</div><br>
@endsection