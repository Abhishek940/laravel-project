<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table='users';
	
	protected $fillable=[
	'name','mobile','email','password'
	];
	
	public $timestamps=false;
}
