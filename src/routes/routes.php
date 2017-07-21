<?php
Route::group(['middleware' => 'web'], function() {

	// Client's routes
	Route::get('about-us', '\App\Http\Controllers\Client\AboutController@index');
});
