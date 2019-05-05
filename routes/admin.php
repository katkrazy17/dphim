<?php

Route::get('admin/sign-in', ['uses' => 'Admin\LoginController@getLogin', 'as' => 'admin.login']);
Route::post('admin/sign-in', 'Admin\LoginController@postLogin');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('logout', ['uses' => 'LoginController@logout', 'as' => 'admin.logout']);
    //route category
    Route::get('categories/childs', ['uses' => 'CategoryController@childs', 'as' => 'categories.childs']);
    Route::resource('categories', 'CategoryController')->except(['create', 'show']);
});