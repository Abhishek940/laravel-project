<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class User extends Controller
{
    public function list()
	{
		return view('user-list');
	}
	public function create()
	{
		return view('create');
	}
	public function loginsubmit(Request $req)
	{
     //print_r($req->input());
      User::all();
	}
	
	public function deleteenquiry($id)
	{
		$user=User::find($id);
		$user->delete();
		return redirect('list')->with('status','Data successfully deleted');
	}
}
