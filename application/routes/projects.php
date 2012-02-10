<?php

/**
 * The projects dashboard
 */
Router::register('GET /projects', function()
{
	Title::set('Projects Dashboard');
	return View::make('layouts.default')
		->nest('content', 'projects.index');
});

View::composer('projects.index', function($view)
{
	$view['projects'] = Project::where('user_id', '=', Session::get(Auth::user_key))
		->where('active', '=', 1)
		->get();
});

/**
 * View a project and all of its previews
 */
Router::register('GET /projects/(:num)', function($project_id)
{
	$project = Project::find($project_id)->with('previews');

	Title::set($project->name);

	View::share('project', $project);

	return View::make('layouts.default')->nest('content', 'projects.view');
});

/**
 * Display create a new project view
 */
Router::register('GET /projects/new', function()
{
	Title::set('Create A Project');
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
		$project->active = 1;

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
	Title::set('Archived Projects');
	return View::make('layouts.default')
		->nest('content', 'projects.archived');
});

View::composer('projects.archived', function($view)
{
	$view['projects'] = Project::where('user_id', '=', Session::get(Auth::user_key))
		->where('active', '=', 0)
		->get();
});