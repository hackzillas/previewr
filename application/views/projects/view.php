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
			<?php if (count($previews->results) > 0): ?>
				<?php foreach ($previews->results as $preview): ?>
					<div class="item span3">
						<a href="<?php echo URL::to('previews/'.$preview->id); ?>">
							<img src="<?php echo URL::base().DS.'uploads'.DS.$project->id.DS.$preview->version->image_src; ?>" alt="<?php echo $preview->name; ?>" />
						</a>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
				<p class="empty">There are no previews for this project yet. Would you like to <?php echo HTML::link('previews/new/'.$project->id, 'create one'); ?>?</p>
			<?php endif; ?>
		</div>
		
		<?php echo $previews->links(); ?>
	</section>

</div>