<div id="content" class="row">
	<?php echo Form::open('previews/create/'.URI::segment(3), 'POST', array('class' => 'span8 offset2 form-horizontal')); ?>

		<fieldset>
			<legend>Create A New Preview for <?php echo $project->name; ?></legend>

			<div class="control-group">
				<?php echo Form::label('name', 'Name', array('class' => 'control-label')); ?>
				<div class="controls">
					<?php echo Form::text('name', Input::old('name'), array('class' => 'input-xlarge')); ?>
				</div>
			</div>

			<div class="control-group">
				<?php echo Form::label('description', 'Description', array('class' => 'control-label')); ?>
				<div class="controls">
					<?php echo Form::textarea('description', Input::old('description'), array('class' => 'input-xlarge', 'rows' => 4)); ?>
				</div>
			</div>

			<div class="form-actions">
				<?php echo Form::submit('Create Project', array('class' => 'btn btn-primary')); ?>
				<?php echo HTML::link('previews/'.URI::segment(3), 'Cancel', array('class' => 'btn')); ?>
			</div>
		</fieldset>

	<?php echo Form::close(); ?>
</div>