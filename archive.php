<?php get_header() ?>

		<section id="blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

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