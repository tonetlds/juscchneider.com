<?php get_header() ?>
<?php if( have_posts() ) {
          while (have_posts()) : the_post(); ?>

		<section id="blog-section">
			<div class="container">				

				<div class="row">
					<div class="col-md-8">					

                      	<article class="" id="post-<?php the_ID()?>">
                      		<h6 class="category">Serviço</h6>                  	

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

								<br/>
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

						<?php dynamic_sidebar( 'sidebar_1' ); ?>
						
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