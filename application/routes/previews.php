<?php

/**
 * View a preview
 */
Route::get('previews/(:num)', function($preview_id)
{
	// TODO: check to see if the project is protected
	$preview = Preview::find($preview_id);

	View::share('preview', $preview);

	Title::set('View Preview');

	return View::make('layouts.default')->nest('content', 'previews.view');
});

View::composer('previews.view', function($view)
{
	$view['version'] = Version::where('preview_id', '=', URI::segment(2))
		->order_by('created_at', 'desc')
		->first();
});

/**
 * Display the create a preview form
 */
Route::get('previews/new/(:num)', function($project_id)
{
	Title::set('Create A Preview');
	
	return View::make('layouts.default')->nest('content', 'previews.new');
});

View::composer('previews.new', function($view)
{
	$view['project'] = Project::find(URI::segment(3));
});

/**
 * Save a new preview
 */
Route::post('previews/create/(:num)', function($project_id)
{
	$rules = array(
		'name' => array('required', 'min:4'),
		'description' => array('min:10'),
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		// create the preview
		$preview = new Preview;

		$preview->project_id = $project_id;
		$preview->name = Input::get('name');
		$preview->description = Input::get('description');

		$preview_id = $preview->save();

		return Redirect::to('versions/new/'.$preview_id)
			->with('message_success', 'Preview created successfully! Now setup the first version!');
	}

	return Redirect::to('previews/new')
		->with_input()
		->with_errors($validator);
});