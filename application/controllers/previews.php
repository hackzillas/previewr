<?php

class Previews_Controller extends Base_Controller {

	public $restful = true;

	public function __construct()
	{
		parent::__construct();

		$this->filter('before', 'auth');
	}

	public function get_view($id)
	{
		$this->layout->content = View::make('previews.view');
	}

}