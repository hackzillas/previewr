<div id="content" class="row">
	<?php echo Form::open_for_files('versions/create/'.$preview->id, 'POST', array('class' => 'span8 offset2 form-horizontal')); ?>

		<fieldset>
			<legend>Create A New Version in <?php echo $preview->name; ?></legend>
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
				<?php echo Form::label('image', 'Image'); ?>
				<div class="controls">
					<?php echo Form::file('image', array('class' => 'input-file')); ?>
				</div>
			</div>

			<div class="form-actions">
				<?php echo Form::submit('Create Version', array('class' => 'btn btn-primary btn-large')); ?>
				&nbsp;or&nbsp;
				<?php echo HTML::link('previews/'.$preview->id, 'Cancel'); ?>
			</div>
		</fieldset>

	<?php echo Form::close(); ?>
</div>