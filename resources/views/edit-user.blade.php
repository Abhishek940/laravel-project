@extends('layout')
@section('content')
<h2 style="text-align:center">Update</h2>
<div class="container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<form method="post" action="/update-user/{{$User->id}}"  enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{$User->name}}">
</div>

<div class="form-group">
<label>Mobile No.</label>
<input type="text" name="mobile" class="form-control" value="{{$User->mobile}}">
</div>

<div class="form-group">
<label>Email id</label>
<input type="text" name="email" class="form-control" value="{{$User->email}}">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" name="password" class="form-control" value="{{$User->password}}">
</div>

<div class="form-group">
<label>Photo</label>
<input type="file" name="image" class="form-control">
<img src="{{url('images/'.$User->image)}}" style="height:75px;width:80px"/>
</div>

<div class="form-group">
<button type="submit" class="btn btn-block btn-danger">Update</button>
</div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>
@endsection