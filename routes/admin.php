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

Route::get('/admin', function () {
    return ('welcome admin');
});

//*-----------------------------*//

Route::get('/test1/', function () {
    return ('welcome');
}) -> name ('koko');

Route::get('/test2/{id}', function ($id) {
    return ($id);
}) -> name ('kokoWithParam');

Route::get('/test3/{id?}', function ($id) {
    return ($id);
});


