<?php

class Previews_Controller extends Base_Controller {

	public $restful = true;

	public function __construct()
	{
		$this->filter('before', 'auth');
	}

	public function get_index()
	{
		die('This is the previews controller.');
	}

}