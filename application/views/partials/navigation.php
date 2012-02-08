<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo URL::base(); ?>"><span class="hidden">Preview</span></a>
			<div class="nav-collapse">
				<ul class="nav left">
					<li class="nav-projects">
						<a href="/preview/projects"><i class="app-icon-nav-projects"></i>Projects</a>
					</li>
					<li class="nav-previews">
						<a href="/preview/previews"><i class="app-icon-nav-previews"></i>Previews</a>
					</li>
				</ul>
				<ul class="nav pull-right">
					<li class="nav-account">
						<div class="btn-group">
							<a class="btn" href="#">
								<img src="http://localhost:8888/preview/public/css/images/avatar-thomas.jpg" class="account-avatar" />
								<span class="account-name">Thomas Bishop</span>
							</a>
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class=""><a href="<?php echo URL::to('projects'); ?>">Projects</a></li>
								<li class=""><a href="<?php echo URL::to('previews'); ?>">Previews</a></li>
								<li class="divider"></li>
								<li class=""><a href="<?php echo URL::to('auth/logout'); ?>">Log Out</a></li>
						 	 </ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>