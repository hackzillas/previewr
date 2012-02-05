<?php

/**
 * The projects dashboard
 */
Router::register('GET /projects', function()
{
	return View::make('layouts.default')
		->nest('content', 'projects.index');
});

/**
 * Display create a new project view
 */
Router::register('GET /projects/new', function()
{
	return View::make('layouts.default')
		->nest('content', 'projects.new');
});

/**
 * Handle create new project form submission
 */
Router::register('POST /projects/create', function() 
{
	$rules = array(
		'name' => array('required', 'min:4'),
		'description' => array('min:10')
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		// save it to the database

		// redirect with success message to projects page
		return Redirect::to('projects/archived')
			->with('message_success', 'Project created successfully!');
	}

	return Redirect::to('projects/new')
		->with_input()
		->with_errors($validator);
});

/**
 * View archived projects
 */
Router::register('GET /projects/archived', function()
{
	return View::make('layouts.default')
		->nest('content', 'projects.archived');
});