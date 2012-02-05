<div id="content" class="row">
	<?php echo Form::open('projects/create', 'POST', array('class' => 'span8 offset2 form-horizontal')); ?>

		<fieldset>
			<legend>Create A New Project</legend>

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

			<div class="control-group">
				<?php echo Form::label('visibility', 'Private or Public?', array('class' => 'control-label')); ?>
				<div class="controls">
					<label for="visibility" class="checkbox">
						<?php echo Form::checkbox('visibility', '1', false, array('id' => 'visibility')); ?>
						Check this box if you want your project to be private.
					</label>
				</div>
			</div>

			<div class="form-actions">
				<?php echo Form::submit('Create Project', array('class' => 'btn btn-primary')); ?>
				<?php echo HTML::link('projects', 'Cancel', array('class' => 'btn')); ?>
			</div>
		</fieldset>

	<?php echo Form::close(); ?>
</div>