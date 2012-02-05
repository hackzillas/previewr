<?php echo View::make('partials.header'); ?>
<?php echo View::make('previews.partials.navigation-previews'); ?>

	<div class="container">

		<?php echo $content; ?>

		<div id="content" class="row">

			<aside id="sidebar" class="span3">
				<div class="well">
					<p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac.</p>
				</div>
				<div class="widget widget-share">
					<h2 class="widget-title">Share</h2>
					<div class="body">
						<p><i class="icon-share"></i> Short URL</p>
						<input type="text" value="This is a test" name="shorturl" id="shorturl" />
					</div>
				</div>
				<div class="widget widget-versions">
					<h2 class="widget-title">Versions</h2>
					<div class="body">
						<ul class="version-thumbnails">
							<li class="version-thumb">
								<a href="#" title="The Title"><img src="http://placekitten.com/75/75" alt="" /></a>
							</li>
							<li class="version-thumb">
								<a href="#" title="The Title"><img src="http://placekitten.com/75/75" alt="" /></a>
							</li>
						</ul>
						<p><a href="#" class="btn">View more versions...</a></p>
					</div>
				</div>
			</aside>

			<section id="main" class="span9 grid">
				<div class="widget widget-comments">
					<h3 class="widget-title">Comments</h3>
					<ul class="comments body row">
						<li class="comment new">
							<div class="span1 avatar">
								<img src="http://placekitten.com/100/100" alt="" />
							</div>
							<div class="span7">
								<div class="btn-group right controls">
									<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
									<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
								</div>
								<p class="comment-author"><span class="label label-success">New!</span><strong>Awesome Client</strong> said:</p>
								<div class="content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
								</div>
								<p class="comment-meta"><small>Posted on January 1st, 2012 at 8:02am</small></p>
							</div>
						</li>
						<li class="comment">
							<div class="span1 avatar">
								<img src="http://placekitten.com/100/100" alt="" />
							</div>
							<div class="span7">
								<div class="btn-group right controls">
									<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
									<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
								</div>
								<p class="comment-author"><strong>Ben Kenobi</strong> said:</p>
								<div class="content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
								</div>
								<p class="comment-meta"><small>Posted on January 1st, 2012 at 7:39am</small></p>
							</div>
						</li>
						<li class="comment">
							<div class="span1 avatar">
								<img src="http://placekitten.com/100/100" alt="" />
							</div>
							<div class="span7">
								<div class="btn-group right controls">
									<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
									<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
								</div>
								<p class="comment-author"><strong>Awesome Client</strong> said:</p>
								<div class="content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
								</div>
								<p class="comment-meta"><small>Posted on January 1st, 2012 at 8:02am</small></p>
							</div>
						</li>
						<li class="comment">
							<div class="span1 avatar">
								<img src="http://placekitten.com/100/100" alt="" />
							</div>
							<div class="span7">
								<div class="btn-group right controls">
									<a rel="tooltip" href="#" data-original-title="Edit Comment" class="btn"><i class="icon-pencil"></i></a>
									<a rel="tooltip" href="#" data-original-title="Delete Comment" class="btn"><i class="icon-remove"></i></a>
								</div>
								<p class="comment-author"><strong>Ben Kenobi</strong> said:</p>
								<div class="content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
								</div>
								<p class="comment-meta"><small>Posted on January 1st, 2012 at 7:39am</small></p>
							</div>
						</li>
					</ul>
				</div>
				<div class="pagination">
				  <ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
					  <a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				  </ul>
				</div>
			</section>

		</div>



<?php echo View::make('partials.footer'); ?>