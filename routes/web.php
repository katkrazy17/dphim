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

Route::group(['prefix' => '', 'namespace' => 'V1'], function () {
    require(base_path('routes/admin.php'));
});

Route::group(['prefix' => '', 'namespace' => 'V1'], function () {
    require(base_path('routes/frontend.php'));
});

