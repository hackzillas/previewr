<?php

class Projects_Controller extends Base_Controller {

	public $restful = true;
	public $layout = 'layouts.project';

	public function __construct()
	{
		parent::__construct();

		$this->filter('before', 'auth');
	}

	public function get_index()
	{
		$this->layout->content = View::make('projects.index');
	}

}