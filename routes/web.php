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
		Route::get('/terms', function()
		{
			return View::make('terms');
		});
	
	});
});

function genArray($urlz) {
	$transURLS = array();
	$routeCollection = LaravelLocalization::getSupportedLanguagesKeys();
	array_push($transURLS,['language' => 'x-default', 'url' => LaravelLocalization::getLocalizedURL( 'en', $urlz)]);
	foreach ($routeCollection as $value) {
		array_push($transURLS,['language' => $value, 'url' => LaravelLocalization::getLocalizedURL( $value, $urlz)]);
	}
	
	return $transURLS;
  };

Route::get('sitemap', function() {

	// create new sitemap object
	$sitemap = App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 60);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {

		$routeCollection = Route::getRoutes();
		$basicURLS = LaravelLocalization::getSupportedLanguagesKeys();
		
		foreach ($routeCollection as $routePath) {
			if($routePath->getActionName() == 'Closure' && $routePath->uri()!= 'api/user' && $routePath->uri()!= 'sitemap') {
				foreach ($basicURLS as $value) {
					$sitemap->add(LaravelLocalization::getLocalizedURL( $value, $routePath->uri()), date('Y-m-d\TH:i:s+00:00'), '1.0', 'daily', [], null, genArray($routePath->uri()));
				}
			}
		};
	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->render('xml');
});
