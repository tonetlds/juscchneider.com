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
                    
                    <!-- <form action="#" method="POST" role="form" class="contact-form">
                        
                        <div class="form-group">                            
                            <input type="text" class="form-control input-lg" id="" name="name" placeholder="nome *" required="required">
                        </div>

                        <div class="form-group">                            
                            <input type="email" class="form-control input-lg" id="" name="email" placeholder="e-mail *" required="required">
                        </div>

                        <div class="form-group">                            
                            <input type="text" class="form-control input-lg" id="" name="subject" placeholder="assunto">
                        </div>

                        <div class="form-group">                            
                            <textarea name="message" id="" name="message" cols="30" rows="5" class="form-control input-lg" placeholder="mensagem *" required="required"></textarea>
                        </div>
                    
                        <small class="pull-right">CAMPOS REQUERIDOS *</small>
                    
                        <button type="submit" class="btn btn-lg btn-default">enviar</button>
                    </form> -->

                </div>
                <div class="col-md-2">                                           
                    <div class="widget social text-center">
                        <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
                    </div> 
                    <div class="widget social text-center">
                        <a href="#"><i class="fa fa-2x fa-instagram"></i></a>
                    </div> 
                    <div class="widget social text-center">
                        <a href="#"><i class="fa fa-2x fa-pinterest"></i></a>
                    </div> 
                    <div class="widget social text-center">
                        <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>