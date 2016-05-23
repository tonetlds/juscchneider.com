<?php /* Template name: Modelo Serviços */ ?>
<?php get_header() ?>


		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="services-list">


						<?php
		                    $type = 'service';
		                    $args=array(
		                      'post_type' => $type,
		                      'post_status' => 'publish',
		                      'posts_per_page' => -1                                 
		                    );
		                    $my_query = null;
		                    $my_query = new WP_Query($args);
		                    if( $my_query->have_posts() ) {
		                      while ($my_query->have_posts()) : $my_query->the_post(); ?>

		                      	<article class="service" id="post-<?php the_ID()?>">
									<div class="content">
										<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>										
									</div>		
		                      		
		                      		<?php if (has_post_thumbnail()) {?>
		                      		<a href="<?php the_permalink() ?>">
										<div class="grid">
											<figure class="effect-lily">
												<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>												
											</figure>
										</div>
									</a>
									<br/>	
									<?php }?>	

									<div class="excerpt"><?php the_excerpt() ?></div>
									
								</article>

		                        <?php
		                      endwhile;
		                    }
		                    wp_reset_query();  // Restore global post data stomped by the_post().
		                    ?>						
						</div>
					</div>
					<div class="col-md-4">

						<?php dynamic_sidebar( 'sidebar_1' ); ?>
			
					</div>
				</div>
			</div>
		</section>	

		<script>console.log( '<?php echo basename( get_page_template() ); ?>' );</script>	

<?php get_footer(); ?>