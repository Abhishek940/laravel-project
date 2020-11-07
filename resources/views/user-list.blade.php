@extends('layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="container">
  <table class="table table-striped">
    <thead>
        <tr>
          <td>S.no</td>
          <td>Name</td>
		  <td>Mobile No.</td>
          <td>Email Id</td>
          <td>Password</td>
		  <td>Image</td>
          <td>Update</td>
		  <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $row)
        <tr>
            <td>{{$loop->iteration}}</td>		    
            <td>{{$row->name}}</td>
			<td>{{$row->mobile}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->password}}</td>
			 <td><img src="{{url('images/'.$row->image)}}" style="height:75px;width:80px"/></td>
            <td><a href="/edit-user/{{$row->id}}" class="btn btn-success">Update</td>
            <form method="post" action="/delete-user/{{$row->id}}">
					  {{csrf_field()}}
					  {{method_field('delete')}}
				  
				  <td><button type="submit"class="btn btn-danger" >Delete</button>
				  </form>
        </tr>
		
        @endforeach
		
    </tbody>
  </table>
  <div class="container">
					<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9">
					{{$user->links()}}
					</div>
					<div class="col-md-9"></div>
					</div>
				 	</div>
  </div>
<div>
@endsection