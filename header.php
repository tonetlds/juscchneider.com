<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title() ?></title>

		<!-- include the angular-ads css styles -->
	    <link href="<?php echo get_stylesheet_directory_uri() ?>/bower_components/angular-ads/css/angular-ads.css" rel="stylesheet">
	    <!-- include the angular-ads js file -->
	    <script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/angular/angular.js" type="text/javascript"></script>
	    <script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/angular-ads/js/angular-ads.js" type="text/javascript"></script>	    
	    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/app.js" type="text/javascript"></script>

		<?php wp_head(); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body ng-app="app">

		<header>
			<div class="container text-center">
				<a href="<?php bloginfo('url'); ?>" id="logo">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" class="" alt="Image">	
				</a>
			</div>
		</header>

		<div class="container text-center">
			<?php wp_nav_menu(array( 'theme_location' 	=> 'main-menu',
									 'container' 		=> 'nav',
									 'menu_id'			=> 'main-menu',
									 'menu_class'		=> 'nav nav-justified'
				 )); ?>
		</div>		