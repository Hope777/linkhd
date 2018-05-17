<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/discuss', function () {
    return view('discuss');
});



Auth::routes();

route::get('/forum', [
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Route::get('{provider}/auth', [
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);

Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@auth_callback',
    'as' => 'social.callback'
]);

Route::get('discussion/{slug}', [
    'uses' => 'DiscussionsController@show',
    'as' => 'discussion'
]);

Route::get('channel/{slug}', [
    'uses' => 'ForumsController@channel',
    'as' => 'channel'
]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/booking', 'BookingController@getIndex');
Route::get('booking/calendar/{id}', 'BookingController@getCalendar');
Route::get('booking/times', 'BookingController@getTimes');
Route::get('booking/details/{id}', 'BookingController@getDetails');
Route::post('anyConfirm', 'BookingController@anyConfirm');
Route::get('confirmed', 'BookingController@anyConfirmed');
Route::get('anySetTime', 'AdminController@anySetTime');


// Customer API Routes
Route::get('api/get-available-days', 'APIController@GetAvailableDays');

// Admin API Routes
Route::group(['prefix' => 'api','middleware'=>'auth'], function()
{
	Route::get('get-all-appointments', 'AdminAPIController@GetAllAppointments');
	Route::get('get-appointment-info/{id}', 'AdminAPIController@GetAppointmentInfo');
	Route::get('get-all-availability', 'AdminAPIController@GetAllAvailability');
	Route::post('set-availability', 'AdminAPIController@SetAvailability');
});

// Admin Routes
Route::group(['prefix' => 'admin','middleware'=>'auth'], function()
{
	Route::get('/', 'AdminController@appointments');

	// Appointment Routes
	Route::get('appointments', 'AdminController@appointments');

	// Availability Routes
	Route::get('availability', 'AdminController@availability');
	Route::post('add/availability', 'AdminController@addAvailability');

	// Configuration Routes
	Route::get('configuration', 'AdminController@configuration');

	// Package Routes
	Route::get('packages', 'AdminController@packages');
	Route::get('edit-package/{package_id}', 'AdminController@editPackage');
	Route::post('update-package/{package_id}', array('as' => 'package.update'), 'AdminController@updatePackage');
});



Route::group(['middleware' => 'auth'], function(){

    Route::resource('channels', 'ChannelsController');

    Route::get('discussion/create/new', [
        'uses' => 'DiscussionsController@create',
        'as' => 'discussions.create'
    ]);

    Route::post('discussions/store', [
        'uses' => 'DiscussionsController@store',
        'as' => 'discussions.store'
    ]);

    Route::post('/discussion/reply/{id}', [
        'uses' => 'DiscussionsController@reply',
        'as' => 'discussion.reply' 
    ]);

    Route::get('/reply/like/{id}', [
        'uses' => 'RepliesController@like',
        'as' => 'reply.like'
    ]);

    Route::get('/reply/unlike/{id}', [
        'uses' => 'RepliesController@unlike',
        'as' => 'reply.unlike'
    ]);

    Route::get('/discussion/watch/{id}', [
        'uses' => 'WatchersController@watch',
        'as' => 'discussion.watch'
    ]);

    Route::get('/discussion/unwatch/{id}', [
        'uses' => 'WatchersController@unwatch',
        'as' => 'discussion.unwatch'
    ]);

    Route::get('/discussion/best/reply/{id}', [
        'uses' => 'RepliesController@best_answer',
        'as' => 'discussion.best.answer'
    ]);

});

