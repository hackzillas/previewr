<?php 

Router::register('GET /previews', function()
{
	return View::make('layouts.default')
		->nest('content', 'previews.view');
});