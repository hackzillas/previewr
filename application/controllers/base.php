<?php

class Base_Controller extends Controller {

	public $layout = 'layouts.default';

	public function __construct()
	{
		$this->filter('before', 'assets');
	}

	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}