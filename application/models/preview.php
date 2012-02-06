<?php

class Preview extends Eloquent\Model {

	public static $table = 'previews';
	public static $timestamps = true;

	public function projects()
	{
		return $this->belongs_to('Project');
	}

	public function project_statuses()
	{
		return $this->has_one('Project_Status');
	}

	public function versions()
	{
		return $this->has_many('Version');
	}
}