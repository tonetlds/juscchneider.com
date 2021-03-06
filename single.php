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
                        $separator  = ', ';
                        $output     = '';
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

                        <h1 class="text-left post-title"><?php the_title() ?></h1>
                        <div class="post-meta">
                            <span class="text-capitalize"><?php the_time('l, d \d\e F \d\e Y'); ?></span> | <span class="text-capitalize">por <?php the_author_posts_link(); ?></span>
                        </div>

                        <?php if (has_post_thumbnail()) {?>
                            <div class="grid single">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>

                            <br/>
                            <?php }?>

                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>

                        </article>

                        <div class="row">
                            <div class="col-md-12" style="border-top: 3px solid #c6c6c6;">
                                <?php
                                // Previous/Próximo post navigation.
                                the_post_navigation( array(
                                    'next_text' => '<span class="meta-nav pull-right" aria-hidden="true">' . __( 'Próximo <i class="fa fa-chevron-right"></i>', 'twentysixteen' ) . '</span> ',
                                    'prev_text' => '<span class="meta-nav pull-left" aria-hidden="true">' . __( '<i class="fa fa-chevron-left"></i> Anterior', 'twentysixteen' ) . '</span> ',
                                    ) );
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <?php get_template_part( 'author-bio' ); ?>

                                    <?php comments_template(); ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">

                            <?php dynamic_sidebar( 'sidebar_1' ); ?>

                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile;
    }
    ?>
    <?php get_footer(); ?>
