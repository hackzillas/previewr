<?php

class Version extends Eloquent\Model {

	public static $timestamps = true;

	public function preview()
	{
		return $this->belongs_to('Preview');
	}
}