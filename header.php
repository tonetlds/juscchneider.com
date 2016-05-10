<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title() ?></title>

		<?php wp_head(); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<header>
			<div class="container text-center">
				<a href="<?php bloginfo('url'); ?>" id="logo">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" class="" alt="Image">	
				</a>
			</div>
		</header>

		<nav class="navbar navbar-default menu-section" role="navigation">
			<div class="container text-center">
				<ul class="nav nav-justified" id="main-menu">
					<li>
						<a href="index.html">Início</a>
					</li>
					<li class="dropdown">
						<a href="blog.html" data-toggle="dropdown disabled" aria-haspopup="true" aria-expanded="false">Blog <b class="caret"></b></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="#">Moda</a>
							</li>
							<li>
								<a href="#">Beleza</a>
							</li>
							<li>
								<a href="#">Comportamento</a>
							</li>
							<li>
								<a href="#">Vídeos</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="servicos.html" data-toggle="dropdown disabled" aria-haspopup="true" aria-expanded="false">Serviços <b class="caret"></b></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li>
								<a href="#">Consultoria</a>
							</li>
							<li>
								<a href="#">Palestras</a>
							</li>
							<li>
								<a href="#">Produção</a>
							</li>							
						</ul>
					</li>
					<li>
						<a href="eu.html">Eu</a>
					</li>
					<li>
						<a href="contato.html">Contato</a>
					</li>
				</ul>
			</div>
		</nav>

				<script>console.log( '<?php echo basename( get_page_template() ); ?>' );</script>		