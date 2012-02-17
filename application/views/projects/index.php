<div id="content" class="row">
	
	<aside id="sidebar" class="span3">
		<div class="widget widget-user-info">
			<div class="title-bar">
				<h2 class="widget-title">Account</h2>
			</div>
			<div class="body">
				<p><img src="http://placehold.it/100x100" class="profile-photo" alt="" /></p>
				<h3>Ben Kenobi</h3>
				<p class="job-title">Jedi Extraordinaire</p>
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

	<section id="main" class="span9">
		<div class="title-bar">
			<h1 class="inline-block title">Projects</h1>
			<div class="controls">
				<a class="btn btn-edit" href="#"><i class="icon-cog"></i>Edit</a>
				<div class="btn-group">
					<a class="btn" rel="tooltip" href="<?php echo URL::to('projects/new'); ?>" data-original-title="New Project"><i class="icon-plus"></i><div class="hidden">Create a New Project</div></a>
					<a class="btn" rel="tooltip" href="<?php echo URL::to('projects/archived'); ?>" data-original-title="Archived Projects"><i class="icon-folder-close"></i><div class="hidden">View Archived Projects</div></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php foreach($projects as $project): ?>
		<?php $project = $project->attributes; ?>
			<div class="item span3">
				<a href="<?php echo URL::to('projects/'.$project['id']); ?>">
					<img src="http://placehold.it/400x300" alt="<?php echo $project['name']; ?>" />
				</a>
			</div>
			<div class="item span3">
				<a href="<?php echo URL::to('projects/'.$project['id']); ?>">
					<img src="http://placehold.it/400x300" alt="<?php echo $project['name']; ?>" />
				</a>
			</div>
			<div class="item span3">
				<a href="<?php echo URL::to('projects/'.$project['id']); ?>">
					<img src="http://placehold.it/400x300" alt="<?php echo $project['name']; ?>" />
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