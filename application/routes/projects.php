<?php

/**
 * The projects dashboard
 */
Route::get('projects', function()
{
	Title::set('Projects Dashboard');

	return View::make('layouts.default')->nest('content', 'projects.index');
});

/**
 * Get all the projects with the latest preview
 */
View::composer('projects.index', function($view)
{
	$view['projects'] = DB::table('projects')
		->where('user_id', '=', Session::get(Auth::user_key))
		->paginate(9);
});

/**
 * View a project and all of its previews
 */
Route::get('projects/(:num)', function($project_id)
{
	Title::set($project->name);

	$project = Project::find($project_id);
	$previews = Preview::where('project_id', '=', $project_id)
		->with('version')
		->paginate(9);

	View::share('project', $project);
	View::share('previews', $previews);

	return View::make('layouts.default')->nest('content', 'projects.view');
});

/**
 * Display form to create a new project
 */
Route::get('projects/new', function()
{
	Title::set('Create A Project');

	return View::make('layouts.default')->nest('content', 'projects.new');
});

/**
 * Handle create new project form submission
 */
Route::post('projects/create', function() 
{
	$rules = array(
		'name' => array('required', 'min:4'),
		'description' => array('min:10'),
		'image' => array('mimes:jpeg,jpg,png,gif')
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		$project = new Project;

		$project->user_id = Session::get(Auth::user_key);
		$project->name = Input::get('name');
		$project->description = Input::get('description');
		$project->private = (Input::get('visibility')) ? 1 : 0;
		$project->active = 1;
		$project->image_src = Input::file('image.name');

		if ($project->save())
		{
			// set the path for the project directory
			$project_directory = path('public').'uploads'.DS.$project->id;

			// make the project directory
			mkdir($project_directory);

			// upload the image
			Input::upload('image', $project_directory.DS.Input::file('image.name'));

			// set the success message
			Message::add('success', 'Project created successfully!');

			return Redirect::to('projects');
		}
	}

	return Redirect::to('projects/new')
		->with_input()
		->with_errors($validator);
});

/**
 * View archived projects
 */
Route::get('projects/archived', function()
{
	Title::set('Archived Projects');

	return View::make('layouts.default')->nest('content', 'projects.archived');
});

View::composer('projects.archived', function($view)
{
	$view['projects'] = Project::where('user_id', '=', Session::get(Auth::user_key))
		->where('active', '=', 0)
		->get();
});