<?php echo View::make('partials.header'); ?>

	<?php if (isset($nav))
	{
		echo $nav;
	}
	else
	{
		if ( ! Auth::guest())
		{
			echo View::make('partials.navigation');
		}
	}
	?>

	<div class="container">

		<?php echo $content; ?>

	</div><!-- .container -->

<?php echo View::make('partials.footer'); ?>