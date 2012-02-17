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
		<div class="title-bar">
			<h1 class="inline-block title">Previews for <?php echo $project->name; ?></h1>
			<div class="controls">
				<a class="btn btn-edit" href="#"><i class="icon-cog"></i>Edit</a>
				<div class="btn-group">
					<a class="btn" rel="tooltip" href="<?php echo URL::to('previews/new/'.$project->id); ?>" data-original-title="New Preview"><i class="icon-plus"></i><div class="hidden">Create a New Preview</div></a>
					<a class="btn" rel="tooltip" href="<?php echo URL::to('previews/archived/'.$project->id); ?>" data-original-title="Archived Previews"><i class="icon-folder-close"></i><div class="hidden">View Archived Previews</div></a>
				</div>
			</div>
		</div>
		
		<div class="row">
		<?php foreach($project->previews as $preview): ?>
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