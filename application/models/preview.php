<?php

class Preview extends Eloquent\Model {

	public static $table = 'previews';
	public static $timestamps = true;

	public function project()
	{
		return $this->belongs_to('Project');
	}

	public function project_status()
	{
		return $this->has_one('Project_Status');
	}

	public function version()
	{
		return $this->has_one('Version');
	}

	public function versions()
	{
		return $this->has_many('Version');
	}

	public function comments()
	{
		return $this->has_many('Comment');
	}
}