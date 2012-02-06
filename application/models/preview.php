<?php

class Preview extends Eloquent\Model {

	public static $timestamps = true;

	public function project()
	{
		return $this->belongs_to('Project');
	}

	public function version()
	{
		return $this->has_many('Version');
	}
}