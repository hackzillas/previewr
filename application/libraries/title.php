<?php
/**
 * Title
 *
 * Simple HTML title generator
 */

class Title {
	
	protected static $page_title;
	protected static $display_title;
	protected static $default_title = 'Previewr App';
	protected static $default_delimiter = ' :: ';
	protected static $after_delimiter = 'Previewr';
	
	// ---------------------------------------------------------------------
	
	public static function set($title = NULL)
	{
		if ($title)
		{
			static::$page_title = $title;
			static::$display_title = $title.static::$default_delimiter.static::$after_delimiter;
		}
		else
		{
			static::$page_title = static::$default_title;
			static::$display_title = static::$default_title;
		}
	}

	public static function get()
	{
		return static::$display_title;
	}

	public static function get_page_title()
	{
		return static::$page_title;
	}

	public static function get_page_class()
	{
		return strtolower(str_replace(' ', '-', static::get_page_title()));
	}
}