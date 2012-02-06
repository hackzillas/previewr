<div id="content" class="row">

	<aside id="sidebar" class="span3">
		<div class="widget widget-user-info">
			<h2 class="widget-title">Account</h2>
			<div class="body">
				<p><img src="http://placehold.it/100x100" class="profile-photo" alt="" /></p>
				<h3>Ben Kenobi</h3>
				<p class="title">Jedi Extraordinaire</p>
				<div id="user-stats">
				<div class="btn-group">
					<a href="#" class="btn">
						38 Projects
					</a>
					<a href="#" class="btn">
						320 Previews
					</a>
				</div>
			</div>
		</div>
		</div>
	</aside>

	<section id="main" class="span9 grid">
		<h1 class="inline-block title">Previews</h1>
		<div class="btn-group right">
			<a class="btn" rel="tooltip" href="<?php echo URL::to('previews/new/'.$project_id); ?>" data-original-title="New Preview"><i class="icon-plus"></i><div class="hidden">Create a New Preview</div></a>
		</div>
		<div class="btn-group right account">
			<a class="btn" href="#">Account</a>
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li class=""><a href="<?php echo URL::to('previews'); ?>">Previews</a></li>
				<li class="divider"></li>
				<li class=""><a href="<?php echo URL::to('auth/logout'); ?>">Log Out</a></li>
		 	 </ul>
		</div>
		
		<div class="row">
		<?php foreach($previews as $preview): ?>
		<?php $preview = $preview->attributes; ?>
			<div class="item span3">
				<a href="<?php echo URL::to('previews/'.$preview['id']); ?>">
					<img src="http://placehold.it/400x300" alt="<?php echo $preview['name']; ?>" />
				</a>
			</div>
		<?php endforeach; ?>
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