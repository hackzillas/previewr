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
			<li class="comment new">
				<div class="span1 avatar">
					<img src="http://placekitten.com/100/100" alt="" />
				</div>
				<div class="span3">
					<div class="btn-group right controls">
						<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
						<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
					</div>
					<p class="comment-author"><span class="label label-success">New!</span><strong>Awesome Client</strong> said:</p>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
					</div>
					<p class="comment-meta"><small>Posted on January 1st, 2012 at 8:02am</small></p>
				</div>
			</li>
			<li class="comment">
				<div class="span1 avatar">
					<img src="http://placekitten.com/100/100" alt="" />
				</div>
				<div class="span3">
					<div class="btn-group right controls">
						<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
						<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
					</div>
					<p class="comment-author"><strong>Awesome Client</strong> said:</p>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
					</div>
					<p class="comment-meta"><small>Posted on January 1st, 2012 at 8:02am</small></p>
				</div>
			</li>	
		</ul>
		<form id="comment-form">
			<input type="text" placeholder="Type a comment then hit enter" />
			<img rel="tooltip" data-original-title="Posting as Thomas" src="http://localhost:8888/preview/public/css/images/avatar-thomas.jpg" class="account-avatar right" />
		</form>
	</div>
</div>