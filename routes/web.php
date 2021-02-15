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
    return view('welcome');
});

//*------------------------------------*//
/*
Route::get('/', function () {
    return view('welcome')->with('data',2);
});
*/


//*------------------------------*//


  Route::namespace('Front')
    ->group(function (){


        Route::get('users' , 'UserController@showAdminName');



    });


/*
Route::group(['prefix' => 'Front'] , function (){
    //set of routes

    Route::get('users' , 'UserController@showAdminName');


    });*/


/*
Route::group(['prefix' => 'Front' , 'middleware ' => 'auth'] , function (){
    //set of routes

    Route::get('users' , 'UserController@showAdminName');


});
*/

/*
Route::get('/', function () {
    return view('welcome');
})-> middleware('auth');
*/


Route::resource('news' , 'NewsController');

Route::get('index' , 'Front\UserController@getIndex');


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});




Auth::routes();  //container all routes such as ligin , register , ..

Route::get('/home', 'HomeController@index')->name('home');
