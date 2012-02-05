<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Preview App</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php echo Asset::container('header')->styles(); ?>
	</head>

	<body data-spy="scroll" data-target=".subnav" data-offset="50">


	<!-- Navbar
		================================================== -->
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="./">Preview App</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="">
								<a href="#"><i class="icon-info-sign icon-white"></i>&nbsp;Info</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">