<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your applications using Laravel's RESTful routing, and it
| is perfectly suited for building both large applications and simple APIs.
| Enjoy the fresh air and simplicity of the framework.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Router::register('GET /hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Router::register('GET /hello, GET /world', function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Router::register('GET /hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Router::register(array('GET /'), 'auth@index');

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in "before" and "after" filters are called before and
| after every request to your application, and you may even create other
| filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Filter::register('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Filter::register('assets', function()
{
	View::name('layouts.default', 'default');

	Asset::container('header')
		->add('bootstrap', 'css/bootstrap.css')
		->add('bootstrap-responsive', 'css/bootstrap-responsive.css');

	Asset::container('footer')
		->add('widgets', 'http://platform.twitter.com/widgets.js')
		->add('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js')
		->add('collapse', 'js/bootstrap-collapse.js')
		->add('tooltip', 'js/bootstrap-tooltip.js')
		->add('dropdowns', 'js/bootstrap-dropdown.js')
		->add('scripts', 'js/script.js');
});

Filter::register('after', function()
{
	// Do stuff after every request to your application...
});

Filter::register('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Filter::register('auth', function()
{
	if (Auth::guest()) return Redirect::to('/');
});