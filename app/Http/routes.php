<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//TEMPORARY ROOTS TO BYPASS LOGIN - > MOVE TO WITHIN WEB MIDDLEWARE





//END OF TEMP ROOTS

Route::group(['middleware' => ['web']], function(){

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/medhistory', function () {
        return view('client.medhistory');
    });

    Route::post('/processMedHistory', 'RegisterClientController@process');
    
});
