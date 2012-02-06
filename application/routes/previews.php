<?php

/**
 * View a preview
 */
Router::register('GET /previews/(:num)', function($preview_id)
{
	// check to see if the project is protected

	return View::make('layouts.default')
		->with('preview', 'the preview content')
		->nest('content', 'previews.view');
});

/**
 * Display the create a preview form
 */
Router::register('GET /previews/new/(:num)', function($project_id)
{
	return View::make('layouts.default')
		->with('project', 'the project content')
		->nest('content', 'previews.new');
});

/**
 * Save a new preview
 */
Router::register('POST /previews/create/(:num)', function($project_id)
{
	$rules = array(
		'name' => array('required', 'min:4'),
		'description' => array('min:10'),
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		$preview = new Preview;

		$preview->project_id = $project_id;
		$preview->name = Input::get('name');
		$preview->description = Input::get('description');

		$preview->save();

		return Redirect::to('previews/'.$project_id)
			->with('message_success', 'Preview created successfully!');
	}

	return Redirect::to('previews/new');
});