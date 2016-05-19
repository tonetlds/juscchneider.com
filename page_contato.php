<?php /* Template name: Modelo Contato */ ?>
<?php get_header() ?>	

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10">

                    <?php if( have_posts() ) {
                            while (have_posts()) : the_post(); ?>

                                <?php echo the_content(); ?>

                            <?php endwhile;
                        }
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>                  

                </div>
                <div class="col-md-2">

                    <?php if ( is_active_sidebar( 'sidebar_contato' ) ) : ?>
                        <div class="sidebar-contato">
                            <?php dynamic_sidebar( 'sidebar_contato' ); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>