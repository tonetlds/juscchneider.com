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
                    <div class="widget">
                        <img src="http://lorempixel.com/g/350/218/fashion/?v=3" class="img-responsive" alt="Image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_widget.jpg" class="img-responsive" alt="">
                        <h3></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint dolorem, ex natus nisi non deleniti eum voluptate reprehenderit nam corrupti, sunt, vitae vel eos nulla. Excepturi fugit autem quibusdam at.</p>
                    </div>
                    <div class="widget">
                        <div class="social text-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="title">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">CHAPÉU</a></li>
                            <li><a href="#">BOTA</a></li>
                            <li><a href="#">CALÇADO</a></li>
                            <li><a href="#">INVERNO</a></li>
                            <li><a href="#">FESTA</a></li>
                            <li><a href="#">VESTIDO</a></li>
                            <li><a href="#">CAMISETA</a></li>
                            <li><a href="#">ACESSÓRIO</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <a href="#"><img src="http://placehold.it/350x350/009847/FFFFFF?text=ANUNCIANTE" class="img-responsive" alt="Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>	

<?php get_footer(); ?>