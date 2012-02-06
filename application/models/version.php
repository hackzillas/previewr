<?php

class Version extends Eloquent\Model {

	public static $table = 'versions';
	public static $timestamps = true;

	public function previews()
	{
		return $this->belongs_to('Preview');
	}
}