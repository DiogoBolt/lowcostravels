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

Route::any('/','FlightController@flights');


Route::auth();

Route::get('/flights/{id}', 'FlightController@showFlight');
Route::get('/flightsbyzone/{zone}', 'FlightController@getByZone');
Route::get('/newflights', 'FlightController@newFlights');
Route::post('/contactus', 'FlightController@contactUs');
Route::get('/contacts', 'FlightController@contacts');







route::group(['middleware'=>'auth'],function() {
    Route::get('backoffice/highlightflights', 'FlightController@highLightFlights');
    Route::get('backoffice/newflight', 'FlightController@newFlight');
    Route::post('/createflight', 'FlightController@createFlight');
    Route::post('/highlightflight', 'FlightController@highlightFlight');
    Route::get('backoffice/flights/edit/{id}', 'FlightController@editFlight');
    Route::post('/editflight', 'FlightController@saveFlight');
    Route::get('backoffice/contacts', 'FlightController@allcontacts');


});



