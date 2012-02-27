<?php

Route::post('comments/create/(:num)', function($preview_id)
{
	$rules = array(
		'comment' => array('required', 'min:6')
	);
	$validator = Validator::make(Input::all(), $rules);

	if ($validator->valid())
	{
		$comment = new Comment;

		$comment->preview_id = $preview_id;
		$comment->user_id = Auth::user()->id;
		$comment->body = Input::get('comment');

		$comment_id = $comment->save();

		Message::add('success', 'Comment created successfully!');

		return Redirect::to('previews/'.$preview_id);
	}
});