<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @version  3.0.0
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 * @link     http://laravel.com
 */

// Setup environment variables
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false)
{
	$_SERVER['LARAVEL_ENV'] = 'local';
}
else
{
	$_SERVER['LARAVEL_ENV'] = 'production';
}

// --------------------------------------------------------------
// Tick... Tock... Tick... Tock...
// --------------------------------------------------------------
define('LARAVEL_START', microtime(true));

// --------------------------------------------------------------
// Indicate that the request is from the web.
// --------------------------------------------------------------
$web = true;

// --------------------------------------------------------------
// Set the core Laravel path constants.
// --------------------------------------------------------------
require '../paths.php';

// --------------------------------------------------------------
// Unset the temporary web variable.
// --------------------------------------------------------------
unset($web);

// --------------------------------------------------------------
// Launch Laravel.
// --------------------------------------------------------------
require path('sys').'laravel.php';