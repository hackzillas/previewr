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
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post('hello, world', function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

/**
 * A group for routes that require authentication
 */
Route::group(array('before' => 'auth'), function()
{
	// automatically pull in routes from the 'routes' directory if there is a
	// file that matches the first URI segment
	$routes_file = path('app').'routes'.DS.URI::segment(1).EXT;
	
	if (is_file($routes_file))
	{
		include $routes_file;
	}

	/**
	 * Log a user out
	 */
	Route::get('auth/logout', function()
	{
		Auth::logout();

		return Redirect::to('/');
	});
});

/**
 * The homepage
 */
Route::get('/', function()
{
	if ( ! Auth::guest()) return Redirect::to('projects');

	return View::make('layouts.default')->nest('content', 'auth.index');
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

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
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
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	Asset::container('header')
		->add('bootstrap', 'css/application.css')
		->add('bootstrap-responsive', 'css/bootstrap-responsive.min.css');

	Asset::container('footer')
		->add('jquery', 'js/jquery.min.js')
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

Route::filter('auth-admin', function()
{
	if (Auth::user()->user_level > 1)
	{
		Message::add('warning', 'You do not have permission to do that!');

		return Redirect::to('/');
	}
});