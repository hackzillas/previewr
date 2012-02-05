<?php

class Projects_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		$this->layout->content = View::make('projects.index');
	}

}