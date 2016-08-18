<?php get_header() ?>

<section id="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="posts-list">
					<?php if( have_posts() ) {
						while (have_posts()) : the_post(); ?>

						<article class="post" id="post-<?php the_ID()?>">

							<?php if (has_post_thumbnail()) {?>
								<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
								<?php }?>
								
								<div class="post-content">
									<h2 class="post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></h2>
									<div class="post-meta">
										<span class="text-capitalize"><?php the_time('l, d \d\e F \d\e Y'); ?></span> | <span class="text-capitalize">por <?php the_author_posts_link(); ?></span>
									</div>

									<?php the_excerpt(); ?>

									<a href="<?php echo the_permalink(); ?>" class="btn btn-lg pull-right read-more"><i class="ion-ios-plus-empty"></i></a>
								</div>
							</article>

						<?php endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>

					<div class="nav-previous alignleft"><?php next_posts_link( '<i class="fa fa-chevron-left"></i> Posts anteriores' ); ?></div>
					<div class="nav-next alignright"><?php previous_posts_link( 'Posts mais recentes <i class="fa fa-chevron-right"></i>' ); ?></div>

				</div>
			</div>
			<div class="col-md-4">

				<?php dynamic_sidebar( 'sidebar_1' ); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
