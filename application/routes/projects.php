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
		$project = new Project;

		$project->user_id = Session::get(Auth::user_key);
		$project->name = Input::get('name');
		$project->description = Input::get('description');
		$project->private = (Input::get('visibility')) ? 1 : 0;

		$project->save();

		// redirect with success message to projects page
		return Redirect::to('projects')
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