<?php get_header() ?>
<?php if( have_posts() ) {
          while (have_posts()) : the_post(); ?>

		<section id="blog-section">
			<div class="container">				

				<div class="row">
					<div class="col-md-8">					

                      	<article class="" id="post-<?php the_ID()?>">                      	

                      		<?php
								$categories = get_the_category();
								$separator = ', ';
								$output = '';
								if ( ! empty( $categories ) ) {
									$output .= '<h6 class="category">';
								    foreach( $categories as $key => $category ) {        
								        $categories[$key] = '<a  class="category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
								    }
								    $output .= implode($separator, $categories);
								    $output .= '</h6>';
								    echo trim( $output, $separator );
								}                      			
                      		?>
														
                      		<h1 class="text-left"><?php the_title() ?></h1>


							
							<?php if (has_post_thumbnail()) {?>												
								<div class="grid">
		
									<figure class="effect-lily">
										<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>												
									</figure>
									
								</div>
							<?php }?>

						 	<div class="post-content">												
	                            <?php the_content(); ?>					                        
							</div>

							<?php
							// Previous/Próximo post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav pull-right" aria-hidden="true">' . __( 'Próximo <i class="fa fa-chevron-right"></i>', 'twentysixteen' ) . '</span> ',
								'prev_text' => '<span class="meta-nav pull-left" aria-hidden="true">' . __( '<i class="fa fa-chevron-left"></i> Anterior', 'twentysixteen' ) . '</span> ',
							) );
							?>
														
						</article>	                    					                   
						
					</div>
					<div class="col-md-4">

						<div class="widget">
							
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ju_scchneider.jpg" class="img-responsive" alt="Image">

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
							    <?php wp_list_categories( array(
							        'orderby'    => 'name',
							        'show_count' => false,
							        'title_li' 	 => ''							                
							    ) ); ?> 
							</ul>													

						</div>

						<div class="widget">
							
							<a href="#"><img src="http://placehold.it/350x350/009847/FFFFFF?text=ANUNCIANTE" class="img-responsive" alt="Image"></a>

						</div>

					</div>
				</div>
			</div>
		</section>	

<?php endwhile;
	}	
?>	
<?php get_footer(); ?>