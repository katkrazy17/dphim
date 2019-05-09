<?php

Route::get('admin/sign-in', ['uses' => 'Admin\Auth\LoginController@getLogin', 'as' => 'admin.login']);
Route::post('admin/sign-in', 'Admin\Auth\LoginController@postLogin');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'admin.logout']);
    Route::post('changePassword', 'Auth\AdminController@changePassword');
    //route category
    Route::get('categories/childs', ['uses' => 'CategoryController@childs', 'as' => 'categories.childs']);
    Route::resource('categories', 'CategoryController')->except(['create', 'show']);
    Route::resource('tags', 'TagController')->except(['show']);
    Route::resource('advertisements','AdvertisementController')->except(['create','show']);
});