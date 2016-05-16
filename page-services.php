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

						<div class="widget">
							
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ju_scchneider.jpg" class="img-responsive" alt="Image">

							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_widget.jpg" class="img-responsive" alt="">	

							<h3></h3>	

							<p>Sempre fui uma apaixonada por imagens. Acredito que isto me levou ao caminho que sigo hoje. Publicitária de formação, “quase” jornalista, especialista em styling e consultora de imagem, vejo e tenho a moda como um objeto de estudo interminável e, também, como uma ferramenta importantíssima para a construção e comunicação do nosso eu.</p>										
							
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
							
							<a href="#"><img src="http://placehold.it/336x280/009847/FFFFFF" class="img-responsive" alt="Image"></a>

						</div>

					</div>
				</div>
			</div>
		</section>	

		<script>console.log( '<?php echo basename( get_page_template() ); ?>' );</script>	

<?php get_footer(); ?>