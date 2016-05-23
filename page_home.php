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
		                      'posts_per_page' => 1                                  
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
	                      'offset' => 1                                  
	                    );
	                    $my_query = null;
	                    $my_query = new WP_Query($args);
	                    if( $my_query->have_posts() ) {
	                      while ($my_query->have_posts()) : $my_query->the_post(); ?>

								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="grid">

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
										<div class="text-left border-bottom">
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
					<div class="col-md-6">
						<article>
							<h2 class="title font-alt">Bella News</h2>
							<img src="http://placehold.it/1280x720/EE7B07/FFFFFF" alt="" class="img-responsive">						
							<h3>Título do post</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et unde sint illo sed placeat, doloribus veritatis aperiam ducimus eum natus adipisci qui, consequatur facilis iste quod nostrum delectus corrupti. Nisi.</p>
							<a href="<?php echo the_permalink(); ?>" class="btn btn-sm pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
						</article>
					</div>
					<div class="col-md-6">
						<article>
							<h2 class="title font-alt">Beaute</h2>
							<img src="http://placehold.it/1280x720/EE7B07/FFFFFF" alt="" class="img-responsive">						
							<h3>Título do post</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iure et qui veniam, placeat aut illo doloremque autem quam debitis. Fuga culpa, magni dicta necessitatibus delectus vel alias consequuntur praesentium.</p>
							<a href="<?php echo the_permalink(); ?>" class="btn btn-sm pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
						</article>
					</div>
				</div>
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


		<section id="instagram-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<span class="icon">
								<i class="fa fa-instagram fa-2x"></i>
							</span>						
							<h1>Instagram</h1>
							<div class="btn-group pull-right">
								<a href="#" class="" id="owl-carousel-instagram-prev">
									<i class="ion-ios-arrow-left fa-2x"></i>
								</a>
								<a href="#" class="" id="owl-carousel-instagram-next">
									<i class="ion-ios-arrow-right fa-2x"></i>
								</a>								
							</div>
						</div>
					</div>
				</div>

				<div class="owl-carousel">
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</section>
		

		<section id="pinterest-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-header">
							<span class="icon">
								<i class="fa fa-pinterest fa-2x"></i>
							</span>						
							<h1>Pinterest</h1>
							<div class="btn-group pull-right">
								<a href="#" class="" id="owl-carousel-pinterest-prev">
									<i class="ion-ios-arrow-left fa-2x"></i>
								</a>
								<a href="#" class="" id="owl-carousel-pinterest-next">
									<i class="ion-ios-arrow-right fa-2x"></i>
								</a>								
							</div>
						</div>
					</div>
				</div>

				<div class="" id="pinterest-carousel">
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
					<div class="">
						<img src="http://placehold.it/256x256/B3B3B3/FFFFFF/?text=FOTO" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</section>

	<?php get_footer(); ?>