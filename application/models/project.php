<?php

class Project extends Eloquent\Model {

	public static $table = 'projects';
	public static $timestamps = true;

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function preview()
	{
		return $this->has_many('Preview');
	}

}