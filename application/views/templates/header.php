<html>
	<head>
		<title><?php echo $title ?>
			- CodeIgniter 2 Tutorial</title>
		<link href="<?php echo base_url();?>public/foundation/stylesheets/_normalize.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>public/foundation/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>public/foundation/stylesheets/screen.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="<?php echo base_url();?>public/foundation/javascripts/vendor/custom.modernizr.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/foundation/javascripts/vendor/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/foundation/javascripts/vendor/zepto.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url();?>public/foundation/javascripts/foundation.min.js"></script>
		<script type="text/javascript">
			var base_url = "<?php echo base_url() ?>";
		</script>
		<script type="text/javascript" src="<?php echo base_url();?>public/foundation/javascripts/vendor/core.js"></script>
	</head>
	<body>
		<?php ?>
		<header style="background: #BBB;">
			<div id="logo"><img src="<?php echo base_url();?>public/images/R-logo.png" alt="Insert Logo Here" />
			</div>
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name">
						<h1><a href="#">Menu</a></h1>
					</li>
					<li class="toggle-topbar menu-icon">
						<a href="#"><span>Weg</span></a>
					</li>
				</ul>
				<section class="top-bar-section">
					<ul></ul>
				</section>
				<section class="top-bar-section">
					<!-- Left Nav Section -->
					<ul class="left">
						<li class="divider"></li>
						<li class="active">
							<a href="#">Main Item 1</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">Main Item 2</a>
						</li>
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="#">Main Item 3</a>

							<ul class="dropdown">
								<li class="has-dropdown">
									<a href="#">Dropdown Level 1a</a>

									<ul class="dropdown">
										<li>
											<label>Dropdown Level 2 Label</label>
										</li>
										<li>
											<a href="#">Dropdown Level 2a</a>
										</li>
										<li>
											<a href="#">Dropdown Level 2b</a>
										</li>
										<li class="has-dropdown">
											<a href="#">Dropdown Level 2c</a>

											<ul class="dropdown">
												<li>
													<label>Dropdown Level 3 Label</label>
												</li>
												<li>
													<a href="#">Dropdown Level 3a</a>
												</li>
												<li>
													<a href="#">Dropdown Level 3b</a>
												</li>
												<li class="divider"></li>
												<li>
													<a href="#">Dropdown Level 3c</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Dropdown Level 2d</a>
										</li>
										<li>
											<a href="#">Dropdown Level 2e</a>
										</li>
										<li>
											<a href="#">Dropdown Level 2f</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Dropdown Level 1b</a>
								</li>
								<li>
									<a href="#">Dropdown Level 1c</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Dropdown Level 1d</a>
								</li>
							</ul>
						</li>
						<li class="divider"></li>
					</ul>

					<!-- Right Nav Section -->
					<ul class="right">
						<li class="divider hide-for-small"></li>
						<li class="has-dropdown">
							<a href="#" class="menu-icon"><img src="<?php echo base_url();?>public/images/gear-white.png" /></a>

							<ul class="dropdown">
								<li>
									<label>Dropdown Level 1 Label</label>
								</li>
								<li class="has-dropdown">
									<a href="#" class="">Dropdown Level 1a</a>

									<ul class="dropdown">
										<li>
											<a href="#">Dropdown Level 2a</a>
										</li>
										<li>
											<a href="#">Dropdown Level 2b</a>
										</li>
										<li class="has-dropdown">
											<a href="#">Dropdown Level 2c</a>

											<ul class="dropdown">
												<li>
													<a href="#">Dropdown Level 3a</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Dropdown Level 1b</a>
								</li>
								<li>
									<a href="#">Dropdown Level 1c</a>
								</li>
								<li class="divider"></li>
								<li>
									<label>Dropdown Level 1 Label</label>
								</li>
								<li>
									<a href="#">Dropdown Level 1d</a>
								</li>
								<li>
									<a href="#">Dropdown Level 1e</a>
								</li>
								<li>
									<a href="#">Dropdown Level 1f</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">See all &rarr;</a>
								</li>
							</ul>
						</li>
						<li class="divider"></li>
						<li class="divider show-for-small"></li>
					</ul>
				</section>
			</nav>
		</header>

