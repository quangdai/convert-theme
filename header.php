<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"/>
				<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<?php the_custom_logo(); ?>
								<a href="<?php bloginfo('url'); ?>" class="logo">
									<span class="title"><?php bloginfo('name'); ?></span>
								</a>
							<!-- Nav -->
								<nav>	<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

								
						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</nav>