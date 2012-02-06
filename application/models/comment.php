<?php

class Comment extends Eloquent\Model {

	public static $table = 'comments';
	public static $timestamps = true;

	public function preview()
	{
		return $this->belongs_to('Preview');
	}
}