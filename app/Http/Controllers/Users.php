<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
class Users extends Controller
{
public function list()
{
    Session::get('logData');
	$user=User::paginate(5);
	return view('user-list',['user'=>$user]);

}
public function create()
{
	return view('create');
}
public function login()
{
		return view('login');
}
	
public function createsubmit(Request $req)
{
		
$req->validate([
'name'=>'required',
'mobile'=>'required',
'email'=>'required',
'password'=>'required',
'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);
if($req->hasFILE('image')){
$file=$req->file('image');
$file->move('images/',$file->getClientOriginalName());
}
$user=new User();
$user->name=$req->input('name');
$user->mobile=$req->input('mobile');
$user->email=$req->input('email');
$user->password=$req->input('password');
$user->image=$file->getClientOriginalName();
$user->save();
$req->session()->put('logData',[$req->input()]);
return redirect('/list');
}

public function edituser(Request $request,$id)
{
$user=User::find($id);
return view('edit-user')->with('User',$user);
}

public function updateuser(Request $request, $id)
{
$request->validate([
'name'=>'required',
'mobile'=>'required',
'email'=>'required',
'password'=>'required',
'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);
       		
if($request->hasFILE('image')){
$file=$request->file('image');
$file->move('images/',$file->getClientOriginalName());
}
$user=User::find($id);
$user->name=$request->input('name');
$user->mobile=$request->input('mobile');
$user->email=$request->input('email');
$user->password=$request->input('password');
$user->image=$file->getClientOriginalName();
$user->update();
return redirect('/list')->with('status','Successfully Updated');
}
public function deleteenquiry($id)
{
$user=User::find($id);
$user->delete();
return redirect('/list');
}
	
public function loginsubmit(Request $req)
{
//print_r($req->input());
//return User::all();
// User::select('*')->where(
//[	 
//['email','=',$req->email],
//['password','=',$req->password],
//]
//)->get();
$email=$req->input('email');
$password=$req->input('password');
$checklogin=DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
if(count($checklogin) >0)
{
echo "<script>alert('Login Success')</script>";
$req->session()->put('logData',[$req->input()]);
return redirect('/list');
}
else {
echo "<script>alert('Invalid Crediential!')</script>";
return view('login');
}	  	  	  	 
}		
	
public function logout(Request $request) {
Auth::logout();
return redirect('/login');
}

}
