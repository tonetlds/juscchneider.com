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
									</li>										
 									-->

		                        <?php
		                      endwhile;
		                    }
		                    wp_reset_query();  // Restore global post data stomped by the_post().
		                    ?>

							
						</div>


					</div>
					<div class="col-md-4">

						<a href="#" class="adblock visible-lg visible-md"><img src="http://placehold.it/336x455/009847/FFFFFF/" alt="" class="img-responsive"></a>						

						<a href="#" class="adblock visible-sm hidden-xs"><img src="http://placehold.it/750x300/009847/FFFFFF/" alt="" class="img-responsive"></a>												
						

						<a href="#" class="adblock hidden-sm visible-xs text-center"><img src="http://placehold.it/336x280/009847/FFFFFF/" alt="" class="img-responsive"></a>												

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

										<a href="<?php the_permalink() ?>">
										<figure class="effect-ju">
											
											<?php if (has_post_thumbnail()) {?>												
												<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>												
										 	<?php }else{ ?>
												<img src="http://placehold.it/1036x690/?text=SEM%20IMAGEM" class="img-responsive" alt="Image">
										 	<?php } ?>
											
											<figcaption>
												<div>
													<h2><?php the_title() ?></h2>
												</div>
											</figcaption>			
										</figure>
										</a>
										
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

		<section id="ads-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="#"><img src="http://placehold.it/336x280/009847/FFFFFF?text=ANUNCIANTE" alt="" class="img-responsive"></a>
					</div>
					<div class="col-md-4">
						<a href="#"><img src="http://placehold.it/336x280/009847/FFFFFF?text=ANUNCIANTE" alt="" class="img-responsive"></a>
					</div>					
					<div class="col-md-4">
						<a href="#"><img src="http://placehold.it/336x280/009847/FFFFFF?text=ANUNCIANTE" alt="" class="img-responsive"></a>
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