<?php

/**
 * Display the form to create a new version
 */
Route::get('versions/new/(:num)', function()
{
	Title::set('Create A Version');

	return View::make('layouts.default')->nest('content', 'versions.new');
});

View::composer('versions.new', function($view)
{
	$view['preview'] = Preview::find(URI::segment(3));
});

/**
 * Create the version
 */
Route::post('versions/create/(:num)', function($preview_id)
{
	$preview = Preview::find($preview_id);

	$rules = array(
		'name' => array('required', 'min:4', 'max:100'),
		'description' => array('min:10'),
		'image' => array('required', 'mimes:jpeg,jpg,png,gif'),
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		$image_path = path('public').DS.'uploads'.DS.$preview->project_id.DS.Input::file('image.name');

		// upload the image
		Input::upload('image', $image_path);

		// create a new version
		$version = array(
			'preview_id' => $preview_id,
			'name' => Input::get('name'),
			'description' => Input::get('description'),
			'image_src' => Input::file('image.name')
		);
		$version_id = DB::table('versions')->insert_get_id($version);

		// set the version number for the preview
		DB::table('previews')
			->where('id', '=', $preview_id)
			->update(array('version_id' => $version_id));

		return Redirect::to('previews/'.$preview_id)
			->with('message_success', 'Version created successfully!');
	}

	return Redirect::to('versions/new/'.$preview_id)
		->with_input()
		->with_errors($validator);
});