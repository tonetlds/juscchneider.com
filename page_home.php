<?php /* Template name: Página inicial */ ?>
<?php get_header() ?>

		<section id="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

						<div class="grid featured-post">

							<?php
		                    $type = 'post';
		                    $args=array(
		                      'post_type' => $type,
		                      'post_status' => 'publish',
		                      'posts_per_page' => 1,
	                      	  'author'	    	=> 4
		                    );
		                    $my_query = null;
		                    $my_query = new WP_Query($args);
		                    if( $my_query->have_posts() ) {
		                      while ($my_query->have_posts()) : $my_query->the_post(); ?>


		                      		<a href="<?php the_permalink() ?>">
										<figure class="effect-lily" id="post-<?php the_ID()?>">

											<?php if (has_post_thumbnail()) {?>
												<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
										 	<?php }?>

											<!-- <img src="http://lorempixel.com/1280/720/fashion/?v=2" class="img-responsive" alt="Image"> -->

											<figcaption>

												<div>
													<h2><?php the_title() ?></h2>
													<div class="excerpt"><?php the_excerpt() ?></div>
												</div>
											</figcaption>
										</figure>


									</a>
									<!-- <li>
										<a href="<?php the_permalink() ?>" title="Ver produto <?php the_title_attribute(); ?>"><?php the_title(); ?> <span class="badge"><span class="ion-ios-arrow-right"></span></span></a>
									</li> -->

		                        <?php
		                      endwhile;
		                    }
		                    wp_reset_query();  // Restore global post data stomped by the_post().
		                    ?>


						</div>


					</div>
					<div class="col-md-4">

						<?php dynamic_sidebar( 'sidebar_home_1' ); ?>

						<!-- <div og-ads >HERE</div> -->

						<!-- <a href="#" class="adblock visible-lg visible-md"><img src="http://placehold.it/336x455/009847/FFFFFF/" alt="" class="img-responsive"></a>

						<a href="#" class="adblock visible-sm hidden-xs"><img src="http://placehold.it/750x200/009847/FFFFFF/" alt="" class="img-responsive"></a>

						<a href="#" class="adblock hidden-sm visible-xs text-center"><img src="http://placehold.it/750x200/009847/FFFFFF/" alt="" class="img-responsive"></a>			 -->

					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">

					<?php
	                    $type = 'post';
	                    $args=array(
	                      'post_type' => $type,
	                      'post_status' => 'publish',
	                      'posts_per_page' => 3,
	                      'offset' => 1,
	                      'author' => 4
	                    );
	                    $my_query = null;
	                    $my_query = new WP_Query($args);
	                    if( $my_query->have_posts() ) {
	                      while ($my_query->have_posts()) : $my_query->the_post(); ?>

								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="grid posts_secondary">

									<?php if (has_post_thumbnail()) {?>
										<a href="<?php the_permalink() ?>">
											<figure class="effect-ju">

												<?php if (has_post_thumbnail()) {?>
													<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
											 	<?php }else{ ?>
													<img src="http://placehold.it/1036x690/FFFfff/000000/?text=%20" class="img-responsive" alt="Image">
											 	<?php } ?>

												<figcaption>
													<div>
														<h2><?php the_title() ?></h2>
													</div>
												</figcaption>
											</figure>
										</a>
									<?php }else{ ?>
										<div class="text-left border-bottom post-no-image">
											<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
											<small><?php the_excerpt(); ?></small>
											<!-- <a href="<?php echo the_permalink(); ?>" class="btn btn-sm btn-default pull-right read-more">Ler mais <i class="ion-ios-plus-empty"></i></a> -->
											<a href="<?php echo the_permalink(); ?>" class="btn btn-sm pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
										</div>
									<?php } ?>
									</div>
								</div>

	                        <?php
	                      endwhile;
	                    }
	                    wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>

				</div>
			</div>

		</section>

		<!-- <section id="gallery-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4"><img src="http://placehold.it/350x213/B3B3B3/FFFFFF?text=imagem" alt="" class="img-responsive"></div>
					<div class="col-md-4"><img src="http://placehold.it/350x213/B3B3B3/FFFFFE?text=imagem" alt="" class="img-responsive"></div>
					<div class="col-md-4"><img src="http://placehold.it/350x213/B3B3B3/FFFFFF?text=imagem" alt="" class="img-responsive"></div>
				</div>
			</div>
		</section> -->

		<section>
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'colunistas' ); ?>
				</div>
				<!-- <div class="row">
					<div class="col-md-6">
					<?php
						$args = array(
	                      'post_status' 	=> 'publish',
	                      'posts_per_page' 	=> 1,
	                      'author'	    	=> 2
	                    );
						$posts_parceiros = null;
	                    $posts_parceiros = new WP_Query($args); // author ID = 1
						if( $posts_parceiros->have_posts() ) {
	                      	while ($posts_parceiros->have_posts()) : $posts_parceiros->the_post(); ?>
								<article class="parceiro-post">
									<h2 class="title font-alt"><?php the_author_posts_link(); ?></h2>
							 		<?php if (has_post_thumbnail()) {?>
							 			<a href="<?php echo the_permalink(); ?>">
							 				<div class="grid">
											<figure class="effect-ju">

												<?php if (has_post_thumbnail()) {?>
													<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
											 	<?php }else{ ?>
													<img src="http://placehold.it/1036x690/FFFfff/000000/?text=%20" class="img-responsive" alt="Image">
											 	<?php } ?>

											</figure>
											</div>
										</a>
								 	<?php } ?>
							 		<h3 class="title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
							 		<a href="<?php echo the_permalink(); ?>" class="btn btn-sm pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
								</article>
							<?php
		                      endwhile;
		                    }
		                    wp_reset_query();  // Restore global post data stomped by the_post().
	                    ?>
					</div>
					<div class="col-md-6">
						<?php
						$args = array(
	                      'post_status' 	=> 'publish',
	                      'posts_per_page' 	=> 1,
	                      'author'	    	=> 3
	                    );
						$posts_parceiros = null;
	                    $posts_parceiros = new WP_Query($args); // author ID = 1
						if( $posts_parceiros->have_posts() ) {
	                      	while ($posts_parceiros->have_posts()) : $posts_parceiros->the_post(); ?>
								<article class="parceiro-post">
									<h2 class="title font-alt"><?php the_author_posts_link(); ?></h2>
							 		<?php if (has_post_thumbnail()) {?>
							 			<a href="<?php echo the_permalink(); ?>">
											<div class="grid">
											<figure class="effect-ju">

												<?php if (has_post_thumbnail()) {?>
													<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
											 	<?php }else{ ?>
													<img src="http://placehold.it/1036x690/FFFfff/000000/?text=%20" class="img-responsive" alt="Image">
											 	<?php } ?>

											</figure>
										</div>
										</a>
								 	<?php } ?>
							 		<h3 class="title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
							 		<a href="<?php echo the_permalink(); ?>" class="btn btn-sm pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
								</article>
							<?php
		                      endwhile;
		                    }
		                    wp_reset_query();  // Restore global post data stomped by the_post().
	                    ?>
					</div>
				</div> -->
			</div>
		</section>

		<section id="ads-section">
			<div class="container">

				<div class="row">

					<div class="col-md-4 hidden-sm hidden-xs">
						<?php dynamic_sidebar( 'sidebar_home_2' ); ?>
					</div>
					<div class="col-md-4 hidden-sm hidden-xs">
						<?php dynamic_sidebar( 'sidebar_home_3' ); ?>
					</div>
					<div class="col-md-4 hidden-sm hidden-xs">
						<?php dynamic_sidebar( 'sidebar_home_4' ); ?>
					</div>

					<div class="col-sm-12 visible-sm">
						<?php dynamic_sidebar( 'sidebar_home_2' ); ?>
						<?php dynamic_sidebar( 'sidebar_home_3' ); ?>
						<?php dynamic_sidebar( 'sidebar_home_4' ); ?>
					</div>

					<div class="col-sm-12 visible-xs">
						<?php dynamic_sidebar( 'sidebar_home_2' ); ?>
						<?php dynamic_sidebar( 'sidebar_home_3' ); ?>
						<?php dynamic_sidebar( 'sidebar_home_4' ); ?>
					</div>

				</div>
			</div>
		</section>


		<section>
			<div class="container">

				<?php $options = get_option( 'social_networks' ) ?>

				<div class="row">
					<div class="col-md-6" id="instagram-section">
						<div class="section-header">
							<span class="icon">
								<i class="fa fa-instagram fa-2x"></i>
							</span>
							<h1>Instagram</h1>
						</div>
						<?php echo do_shortcode('[instagram-feed id="9054015"]'); ?>
					</div>
					<div class="col-md-6" id="pinterest-section">
						<div class="section-header">
							<span class="icon">
								<i class="fa fa-pinterest fa-2x"></i>
							</span>
							<h1>Pinterest</h1>
						</div>
						<?php echo do_shortcode('[pin_profile username="'.$options['pinterest'].'" size="custom" image_width="120" board_width="50%" board_height="350"]'); ?>
					</div>
				</div>

			</div>
		</section>

	<?php get_footer(); ?>
