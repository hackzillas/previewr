<?php

class User extends Eloquent\Model {

	public static $table = 'users';
	public static $timestamps = true;

	public function projects()
	{
		return $this->has_many('Project');
	}
}