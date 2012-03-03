<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title><?php echo Title::get(); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php echo Asset::container('header')->styles(); ?>

		<script type="text/javascript" src="http://use.typekit.com/muy1jrv.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	</head>
	<body data-spy="scroll" data-target=".subnav" data-offset="50" class="<?php echo Title::get_page_class(); ?>">

		<?php echo Message::display(); ?>