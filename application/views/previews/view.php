<div id="content" class="preview">
	<?php
	$styles  = 'margin: 0 auto;';
	$styles .= 'display: block;';
	?>
	<img src="<?php echo URL::base(); ?>/public/uploads/versions/<?php echo $version->image_src; ?>" alt="Title" style="<?php echo $styles; ?>"/>
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

		</ul>
		<form id="comment-form">
			<input type="text" placeholder="Type a comment then hit enter" />
		</form>
	</div>
</div>