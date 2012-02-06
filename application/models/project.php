<?php

class Project extends Eloquent\Model {

	public static $timestamps = true;
	public static $table = 'projects';

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function preview()
	{
		return $this->has_many('Preview');
	}

}