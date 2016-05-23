<?php get_header() ?>		                      		
	<section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                	<?php if( have_posts() ) {
		                      while (have_posts()) : the_post(); ?>
                    
				                    <div class="page-content" id="post-<?php the_ID()?>">

				                        <div class="grid">
				                            <figure class="effect-lily" id="featured">
				                                <?php if (has_post_thumbnail()) {?>												
													<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>												
											 	<?php }?>
				                            </figure>
				                        </div>
										
				                        <div class="post-content">
											<h1><?php the_title() ?></h1>
				                            <?php the_content(); ?>
				                        </div>
				                    </div>
								<?php endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
						?>	
                </div>

                <div class="col-md-4">
                    <?php dynamic_sidebar( 'sidebar_1' ); ?>
                </div>
            </div>
        </div>
    </section>	

<?php get_footer(); ?>