<?php

class Auth_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		$this->layout->content = View::make('auth.index');
	}

	public function post_login()
	{
		$rules = array(
			'email' => array('required', 'email', 'max:100'),
			'password' => array('required', 'min:6')
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->valid())
		{
			return Redirect::to('projects');
		}

		return Redirect::to('/')->with_input();
	}

}