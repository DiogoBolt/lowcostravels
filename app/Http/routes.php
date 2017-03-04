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

Route::get('/','FlightController@publicView');


Route::auth();



route::group(['middleware'=>'auth'],function() {
    Route::get('/flights', 'FlightController@flights');
    Route::get('/newflight', 'FlightController@newFlight');
    Route::post('/createflight', 'FlightController@createFlight');
    Route::get('/flights/{id}', 'FlightController@view');
    Route::get('/highlightflights', 'FlightController@highLightFlights');
    Route::post('/highlightflight', 'FlightController@highlightFlight');
    Route::get('/flightsbyzone/{zone}', 'FlightController@getByZone');
    Route::get('/flights/edit/{id}', 'FlightController@editFlight');
    Route::post('/editflight', 'FlightController@saveFlight');
});



