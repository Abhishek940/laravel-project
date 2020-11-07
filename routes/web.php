<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('login','Users@login');
Route::get('create','Users@create');
Route::post('loginsubmit','Users@loginsubmit');
Route::post('createsubmit','Users@createsubmit');
Route::delete('/delete-user/{id}','Users@deleteenquiry');
Route::get('/edit-user/{id}','Users@edituser');
Route::put('/update-user/{id}','Users@updateuser');
Route::get('logout', 'Users@logout');

Route::group(['middleware'=>['logCheck']],function(){
	Route::get('list','Users@list');
    
});