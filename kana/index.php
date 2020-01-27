<?php get_header(); ?>
<img src="<?php bloginfo('template_directory');?>/img/background.jpg" class="img-fluid" alt="Affiche du spectacle" />
<!-- end header -->

<main>
    <!-- A propos -->
    <section class="theme-bg-black" id="a-propos">
        <div class="container">
            <div class="row">
                <div class="py-5 col-sm-12">
                    <h2>À propos</h2>
                    <hr class="hr-bg-blck">
                    <?php 
                        $post_id =11; $queried_post = get_post($post_id); $content = $queried_post->post_content; ?>
                    <?php echo do_shortcode($content) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end - à propos -->

    <!-- Actualités -->
    <section class="theme-bg-yellow" id="actualites">
        <div class="container">
            <div class="py-5 col-sm-12 col-lg-12">
                <h2>Actualités</h2>
                <hr class="hr-bg-ylw">
                <?php 
            $args = array( 'post_type' => 'revues de presse');
            $the_query = new WP_Query( $args ); 
            ?>
                <div class="row">

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                        <div class="card">
                            <!-- Heading -->
                            <div class="card-body">
                                <h4 class="card-title pt-3"><?php the_title();?></h4>
                                <h6 class="card-subtitle text-muted"></h6>
                            </div>

                            <!-- card-img -->
                            <?php the_post_thumbnail();?>
                            <!-- Text Content -->
                            <div class="card-body pt-0">
                                <div class="card-text"><?php the_content();?></div>
                            </div>

                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

                </div>

            </div>
        </div>
    </section>
    <!-- end - actualités -->

    <!-- Vidéos -->
    <section class="theme-bg-black" id="videos">
        <div class="container-fluid">
            <div class="row">
                <div class="py-5 col-12 col-sm-12 col-lg-12">
                    <h2>Vidéos</h2>
                    <hr class="hr-bg-blck">
                    <div class="row">
                        <?php 
            $args = array( 'post_type' => 'videos');
            $the_query = new WP_Query( $args ); 
            ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-12 col-sm-12 col-lg-6 mt-4">
                            <div class="text-sm-center">
                                <?php
                                the_content();
                                  ?>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end vidéos -->

    <!-- Tickets -->
    <section class="theme-bg-yellow" id="tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="py-5 col-12 col-sm-12 col-lg-12">
                    <h2>Tickets</h2>
                    <h4>Tarifs</h4>
                    <hr class="hr-bg-ylw">
                    <div class="row justify-content-center text-center">
                        <div class="col-12 sm-12 col-lg-4">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                            <div class="price mt-2 mb-2">
                                Tickets Early Bird - 25€
                            </div>
                        </div>
                        <div class="col-12 sm-12 col-lg-4">
                            <i class="fa fa-ticket fa-3x" aria-hidden="true"></i>
                            <div class="price mt-2 mb-2">
                                Tickets en Pré-vente - 30€
                            </div>
                        </div>
                        <div class="col-12 sm-12 col-lg-4">
                            <i class="fa fa-ticket fa-3x" aria-hidden="true"></i>
                            <div class="price mt-2 mb-2">
                                Tickets Sur place - 40€
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-center text-center">
                        <a class="btn cta cta-dark my-lg-5" href="https://www.titi.com" target="_blank">Je réserve ma
                            place</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end-tickets -->

    <!-- Contact -->
    <section class="theme-bg-black" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div id="" class=" py-5 col-12 col-sm-12 col-lg-6">
                    <h2>Contact</h2>
                    <hr class="hr-bg-blck">
                    <?php echo do_shortcode ('[contact-form-7 id="40" title="Une question ? Un message ? Contactez-nous !"]' );?>
                </div>
                </div>
            </div>
    </section>
    <!-- end form  -->
</main>
<?php get_footer();?>