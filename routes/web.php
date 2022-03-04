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


Route::group(['prefix' => 'admin'], function(){
/*	Route::get('/', [ 'as' => 'login','uses' => 'Auth\LoginController@index']);
	Route::post('/login', [ 'uses' => 'Auth\LoginController@login']);
    Route::get('/logout', [ 'uses' => 'Auth\LoginController@logout']);*/

	//Route::group(['namespace' => 'Admin'], function(){
	    //Home
	    Route::get('/dashboard', ['uses' => 'Admin\DashboardController@index']);
	   	Route::get('/add-professors', ['uses' => 'Admin\ProfessorController@index']);
	   	Route::post('/store-professors', ['uses' => 'Admin\ProfessorController@store']);
	   	Route::get('/professors-edit/{userid}',['uses' => 'Admin\ProfessorController@edit']);
	   	Route::post('/professors-update', ['uses' => 'Admin\ProfessorController@update']);
	   	Route::get('/show-professors', ['uses' => 'Admin\ProfessorController@show']);
	   	Route::get('/table',['uses' => 'Admin\ProfessorController@table']);
	   	Route::get('/delete-professors/{userid}', ['uses' => 'Admin\ProfessorController@delete']);

	   	Route::get('/leaves-list', ['uses' => 'Admin\LeaveController@showleave']);
	   	Route::get('/leaveTable',['uses' => 'Admin\LeaveController@leavetable']);
	   	Route::get('/leave-edit/{leaveid}', ['uses' => 'Admin\LeaveController@edit']);
	   	Route::post('/leave-update', ['uses' => 'Admin\LeaveController@update']);
	   // Route::get('/books-details/{seo_url}', ['uses' => 'PostController@booksDetails']);
	   // Route::post('/comment/save', ['uses' => 'PostController@commentStore']);
	    

	   });

	   	Route::get('/apply-leave', ['uses' => 'Admin\LeaveController@apply']);
	 	Route::post('/store-leave-request', ['uses' => 'Admin\LeaveController@storeLeave']);  	

//});


  