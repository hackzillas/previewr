<?php

Route::group(array('before' => 'auth-admin'), function()
{
	/**
	 * Display the main users area
	 */
	Route::get('users', function()
	{
		Title::set('Users');

		return View::make('layouts.default')->nest('content', 'users.index');
	});

	/**
	 * Display the create users form
	 */
	Route::get('users/new', function()
	{

	});

	/**
	 * Handle a create user form submission
	 */
	Route::post('users/create', function()
	{

	});

	/**
	 * Display the edit users page
	 */
	Route::get('users/edit/(:num)', function()
	{

	});

	/**
	 * Handle a user update form submission
	 */
	Route::post('users/update/(:num)', function()
	{

	});

	/**
	 * View a user's profile
	 */
	Route::get('users/(:num)', function()
	{

	});
});

View::composer('users.index', function($view)
{
	$view['users'] = User::all();
});