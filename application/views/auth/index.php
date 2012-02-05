<div class="row form-login">
	<div class="span4 offset4">
		<h1 class="logo">Preview</h1>

		<?php echo Form::open('auth/login', 'POST'); ?>
			<p><?php echo Form::text('email', Input::old('email'), array('placeholder' => 'Email')); ?></p>
			<p><?php echo Form::password('password', array('placeholder' => 'Password')); ?></p>
			<p><?php echo Form::submit('Log In', array('class' => 'btn btn-large btn-primary')); ?></p>
		<?php echo Form::close(); ?>
		<p class="login-form-footer"><i class="icon-question-sign"></i>&nbsp;<?php echo HTML::link('#', 'Forget your password?'); ?><span class="pull-right">&copy; <?php echo date('Y'); ?>	Hackzillas, bitches.</span></p>
	</div>
</div>