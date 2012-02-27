<div id="content" class="preview">
	<?php
	$styles  = 'margin: 0 auto;';
	$styles .= 'display: block;';
	?>

	<?php if ( ! empty($preview->version)): ?>
		<img src="<?php echo URL::to('uploads/versions/'); ?><?php echo $preview->version->image_src; ?>" alt="<?php echo $preview->version->name; ?>" title="<?php echo $preview->version->description; ?>" style="<?php echo $styles; ?>"/>
	<?php else: ?>
		<p style="margin: 75px 0; text-align: center; color: #ddd;">No versions have been created yet for this preview. Would you like to <?php echo HTML::link('versions/new/'.$preview->id, 'upload one'); ?>?</p>
	<?php endif; ?>
</div>

<div id="controls">
	<div id="action">
		<a href="#" class="btn btn-success btn-large"><i class="app-icon-controls-approve"></i>Approve</a>
		<a href="#" class="btn btn-danger btn-large"><i class="app-icon-controls-reject"></i>Reject</a>
		<span class="separator"></span>
		<a href="#" id="comments-toggle" class="btn btn-secondary btn-large"><i class="app-icon-controls-comments"></i><span class="hidden">Comments</span></a>
	</div>
	<div id="comments-popover">
		<ul id="comments">
			<?php foreach ($comments as $comment): ?>
				<li class="comment new">
					<div class="span1 avatar">
						<img src="http://placekitten.com/100/100" alt="" />
					</div>
					<div class="span3">
						<div class="btn-group right controls">
							<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
							<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
						</div>
						<p class="comment-author"><span class="label label-success">New!</span></p>
						<div class="content">
							<p><?php echo $comment->body; ?></p>
						</div>
						<p class="comment-meta"><small>Posted on <?php echo $comment->created_at; ?></small></p>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php echo Form::open('comments/create/'.$preview->id, 'post', array('id' => 'comment-form')); ?>
			<?php echo Form::text('comment', '', array('placeholder' => 'Type a comment then hit enter')); ?>
			<?php echo Form::submit('Submit', array('style' => 'background: url("http://localhost:8888/previewr/public/css/images/avatar-thomas.jpg"); height: 25px; width: 25px; text-indent: -9999em;', 'data-original-title' => 'Posting as Thomas')); ?>
		<?php echo Form::close(); ?>
	</div>
</div>