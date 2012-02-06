<?php

class Project_Status extends Eloquent\Model {

	public static $table = 'project_statuses';
	public static $timestamps = true;

	public function project()
	{
		return $this->has_many('Project');
	}
}