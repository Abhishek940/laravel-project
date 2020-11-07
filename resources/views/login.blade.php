@extends('layout')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<h2 style="text-align:center">Login </h2>
<form method="post" action="/loginsubmit">
@csrf
<div class="form-group">
<label>User Name</label>
<input type="text" name="email" class="form-control" placeholder="Enter Username" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control" placeholder="Enter Password" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
@endsection