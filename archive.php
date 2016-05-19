<?php get_header() ?>

		<section id="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					
					<h6 class="category">Categoria</h6>
					<h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>

						<?php if( have_posts() ) {
			                      while (have_posts()) : the_post(); ?>

			                      <article class="" id="post-<?php the_ID()?>">
										
										<div class="grid">
				
											<figure class="effect-lily">
												
												<?php if (has_post_thumbnail()) {?>												
													<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>												
											 	<?php }?>
												
											</figure>
											
										</div>

										 <div class="post-content">
												<h2 class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></h2>
												<div class="post-meta">
					                                <span class="text-capitalize"><?php the_time('l, d \d\e F \d\e Y'); ?></span> | <span class="text-capitalize">por <?php the_author_posts_link(); ?></span>
					                            </div>
					                            <?php the_excerpt(); ?>					                        
										</div>
										<a href="<?php echo the_permalink(); ?>" class="btn btn-lg pull-right read-more"><i class="ion-ios-plus-empty"></i></a>							
									</article>

									&nbsp;
	                    					                    
									<?php endwhile;
								}
								wp_reset_query();  // Restore global post data stomped by the_post().
							?>	
						
					</div>
					<div class="col-md-4">

						<?php dynamic_sidebar( 'sidebar_1' ); ?>

						<div class="widget">
							
							<a href="#"><img src="http://placehold.it/336x280/009847/FFFFFF" class="img-responsive" alt="Image"></a>

						</div>

					</div>
				</div>
			</div>
		</section>	

		<script>console.log( '<?php echo basename( get_page_template() ); ?>' );</script>	

<?php get_footer(); ?>