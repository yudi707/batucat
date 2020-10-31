<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/key', function() {
//     return \Illuminate\Support\Str::random(32);
// });

$router->get('/', [
	'as' => 'index', function () use ($router) {
		return view('pages.home.index')
			->with('csrf_token', app('request')->session()->get('_token'));
}]);

$router->group(['prefix' => '{lang}'], function ($lang) use ($router) {

	$router->get('/', [
		'as' => 'index', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.home.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/home', [
		'as' => 'home', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.home.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/about', [
		'as' => 'about', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.about.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/about/company', [
		'as' => 'about.company', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.about.company.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/about/philosophy', [
		'as' => 'about.philosophy', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.about.philosophy.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/about/access', [
		'as' => 'about.access', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.about.access.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);


	$router->get('/product', [
		'as' => 'product', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.product.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/product/adhesive', [
		'as' => 'product.adhesive', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.product.adhesive.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/product/decorative', [
		'as' => 'product.decorative', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.product.decorative.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);



	$router->get('/paint', [
		'as' => 'paint', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.paint.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/paint/exterior', [
		'as' => 'paint.exterior', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.paint.exterior.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/paint/interior', [
		'as' => 'paint.interior', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.paint.interior.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);	

	$router->get('/sales', [
		'as' => 'sales', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.sales.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/csr', [
		'as' => 'csr', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.csr.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/contact', [
		'as' => 'contact', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.contact.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/news', [
		'as' => 'news', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.news.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

	$router->get('/news/news-1', [
		'as' => 'news.news-1', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.news.content-1.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

		$router->get('/news/news-2', [
		'as' => 'news.news-2', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.news.content-2.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);

		$router->get('/news/news-3', [
		'as' => 'news.news-3', function ($lang) use ($router) {
			app('translator')->setLocale($lang);
			return view('pages.news.content-3.index')
				->with('csrf_token', app('request')->session()->get('_token'));
	}]);
});