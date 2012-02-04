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
					<a class="brand" href="./index.html">Bootstrap</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="">
								<a href="./index.html">Overview</a>
							</li>
							<li class="">
								<a href="./scaffolding.html">Scaffolding</a>
							</li>
							<li class="">
								<a href="./base-css.html">Base CSS</a>
							</li>
							<li class="">
								<a href="./components.html">Components</a>
							</li>
							<li class="">
								<a href="./javascript.html">Javascript plugins</a>
							</li>
							<li class="">
								<a href="./less.html">Using LESS</a>
							</li>
							<li class="divider-vertical"></li>
							<li class="">
								<a href="./download.html">Customize</a>
							</li>
							<li class="active">
								<a href="./examples.html">Examples</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<!-- Masthead
			================================================== -->
			<header class="jumbotron subhead" id="overview">
				<h1>Bootstrap examples</h1>
				<p class="lead">We've included a few basic examples as starting points for your work with Bootstrap. We encourage folks to iterate on these examples and not simply use them as an end result.</p>
			</header>