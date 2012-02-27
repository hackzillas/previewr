<?php

use Laravel\Session as Session;

class Message {

	protected static $messages = array();

	public static function add($type, $body)
	{
		static::$messages = Session::get('messenger_messages', array());

		$message['type'] = $type;
		$message['body'] = $body;

		static::$messages[] = $message;

		Session::flash('messenger_messages', static::$messages);
	}

	public static function display()
	{
		$html = '';
		$messages = Session::get('messenger_messages');

		if (count($messages) > 0)
		{
			foreach ($messages as $message)
			{
				$html  = '<div class="alert alert-header alert-'.$message['type'].'">';
				$html .= '<div class="container">';
				$html .= '<a class="close" data-dismiss="alert">×</a>';
				$html .= htmlspecialchars($message['body']);
				$html .= '</div>';
				$html .= '</div>';
			}
		}

		return $html;
	}
}