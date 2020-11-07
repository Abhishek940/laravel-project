@extends('layout')
@section('content')
<h2 style="text-align:center">Registration Form</h2>
<div class="container">
<div class="row">
<div class="col-md-3">
</div>

<div class="col-md-6">
<form method="post" action="/createsubmit" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="Enter Name">
</div>
<div class="form-group">
<label>Mobile No.</label>
<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No">
</div>

<div class="form-group">
<label>Email id</label>
<input type="text" name="email" class="form-control" placeholder="Enter Email ">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control" placeholder="Enter Password">
</div>
<div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control">
</div>
<div class="form-group">
<button type="submit" class="btn btn-block btn-danger">Submit</button>
</div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
@endsection