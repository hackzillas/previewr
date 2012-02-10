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