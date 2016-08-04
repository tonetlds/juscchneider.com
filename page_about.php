<?php /* Template name: Modelo Sobre */ ?>
<?php get_header() ?>		                      		
	<section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                	<?php if( have_posts() ) {
		                      while (have_posts()) : the_post(); ?>
                    
				                    <div class="page-content" id="post-<?php the_ID()?>">		                                
										
				                        <div class="post-content hyphenate">											
				                            <?php the_content(); ?>
				                        </div>
				                    </div>
								<?php endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
						?>	
                </div>

                <div class="col-md-4 about-sidebar">                	
                    <?php dynamic_sidebar( 'sidebar_2' ); ?>                    
                </div>
            </div>
        </div>
    </section>	

<?php get_footer(); ?>