<div id="content" class="row">
	
	<aside id="sidebar" class="span3">
		<div class="widget widget-user-info">
			<h2 class="widget-title">Account</h2>
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
		<?php foreach ($projects->results as $project): ?>
			<div class="item row">
				<?php if (empty($project->image_src)):
					$background = 'http://placehold.it/270x75';
				else:
					$background = URL::to('uploads/'.$project->id.'/').$project->image_src;
				endif; ?>
				<a href="<?php echo URL::to('projects/'.$project->id); ?>" class="span3 project-preview" style="background: url('<?php echo $background; ?>') no-repeat center center;"></a>
				<div class="span6">
					<h2><a href="<?php echo URL::to('projects/'.$project->id); ?>"><?php echo $project->name; ?></a></h2>
					<p><?php echo $project->description; ?></p>
				</div>
			</div>
		<?php endforeach; ?>
		
		<?php echo $projects->links(); ?>
	</section>

</div>