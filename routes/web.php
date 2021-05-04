<?php

use Illuminate\Support\Facades\Route;

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
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
	Route::group([
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
	], function()
	{
		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
		Route::get('/', function()
		{
			return View::make('index');
		});
	
	});
});
