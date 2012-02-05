<?php

class Auth_Controller extends Base_Controller {

	public function action_index()
	{
		$this->layout->content = View::make('auth.index');
	}

	public function action_login()
	{

	}

}