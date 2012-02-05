<?php

class Auth_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		$this->layout->content = View::make('auth.index');
	}

	public function post_login()
	{

	}

}