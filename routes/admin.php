<?php
use Illuminate\Http\Request;
Route::resource('categories', 'Admin\CategoryController');
Route::group(['prefix' => 'admin','namespace' =>'Admin' ],function(){
    Route::get('login', ['uses' => 'Auth\LoginController@getLogin', 'as' => 'admin.login']);
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'admin.logout']);
    Route::resource('register', 'Auth\RegisterController');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('index', function() {
        return view('admin.contents.admins.index');
    });
    Route::resource('admins', 'AdminController');
 });
 