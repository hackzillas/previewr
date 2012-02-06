<?php

class User extends Eloquent\Model {

	public static $timestamps = true;

	public function project()
	{
		return $this->has_many('Project');
	}
}