<?php

require('routes/projects.php');
require('routes/previews.php');
require('routes/versions.php');

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
|		Route::register('GET /hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::register('GET /hello, GET /world', function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::register('GET /hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

// Route::register('GET /projects', function() {return 'dead';});

/**
 * The homepage
 */
Route::get('/', function()
{
	return View::make('layouts.default')
		->nest('content', 'auth.index');
});

/**
 * The main login route
 */
Route::post('auth/login', function()
{
	$rules = array(
		'email' => array('required', 'email', 'max:100'),
		'password' => array('required', 'min:6')
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		// Try to log the user in
		if (Auth::attempt(Input::get('email'), Input::get('password')))
		{
			return Redirect::to('projects');
		}
	}

	return Redirect::to('/')->with_input()->with_errors($validator);
});

/**
 * Log a user out
 */
Route::get('auth/logout', function()
{
	Auth::logout();

	return Redirect::to('/');
});

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
|		Route::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	Asset::container('header')
		->add('bootstrap', 'css/bootstrap.css')
		->add('bootstrap-responsive', 'css/bootstrap-responsive.css');

	Asset::container('footer')
		->add('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js')
		->add('widgets', 'http://platform.twitter.com/widgets.js')
		->add('collapse', 'js/bootstrap-collapse.js')
		->add('tooltip', 'js/bootstrap-tooltip.js')
		->add('dropdowns', 'js/bootstrap-dropdown.js')
		->add('scripts', 'js/script.js');
});

Route::filter('after', function()
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('/');
});