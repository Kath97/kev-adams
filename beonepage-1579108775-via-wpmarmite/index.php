<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BeOnePage
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kev Adams - #sois10ans</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Additionnal JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Additionnal CSS -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>

    <!-- header -->
    <header id="accueil">

        <div id="l-header" class="col-12 col-sm-12 col-lg-12">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content"
                    aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <h1 class="navbar-brand" id="brand" href="#accueil">#sois10ans</h1>

                <!-- Items -->
                <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#a-propos">À Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#actualites">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#videos">Vidéos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#tickets">Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item text-center justify-content-end">
                            <button href="https://www.titi.com" class="btn cta" target="_blank">Achetez vos
                                tickets </button>
                        </li>
                    </ul>
            </nav>
        </div>
    </header>
    <!-- end header -->

    <main>
        <!-- A propos -->
        <section class="theme-bg-black" id="a-propos">
            <div class="container">
                <div class="row">
                    <div class="py-5 col-sm-12">
                        <h2>À propos</h2>
                        <hr class="hr-bg-blck">
                        <?php $post_id =11; $queried_post = get_post($post_id); $content = $queried_post->post_content; ?>
<?php echo $content;?>
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
            
            <div class="col-6 col-sm-6 col-lg-6 my-4">    
<div class="card">
<!-- Heading -->
<div class="card-body">
<h4 class="card-title pt-3"><?php the_title();?></h4>
<h6 class="card-subtitle text-muted"></h6>
</div>

<!-- Text Content -->
<div class="card-body pt-0">
<p class="card-text"><?php the_content();?></p>
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
                            <div class="col-12 col-sm-12 col-lg-6">
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
                            <div class="col-12 sm-12 col-lg-3">
                                <a href="https://placeholder.com"><img
                                        src="https://via.placeholder.com/280x180?text=Tickets+Early+Bird"></a>
                                <!-- <img src="img/" alt="Tickets Early Bird" class=""></a> -->
                                <div class="price mt-2 mb-2">
                                    25€
                                </div>
                            </div>
                            <div class="col-12 sm-12 col-lg-3">
                                <a href="https://placeholder.com"><img
                                        src="https://via.placeholder.com/280x180?text=Tickets+en+Pré-vente"></a>
                                <div class="price mt-2 mb-2">
                                    30€
                                </div>
                            </div>
                            <div class="col-12 sm-12 col-lg-3">
                                <a href="https://placeholder.com"><img
                                        src="https://via.placeholder.com/280x180?text=Tickets+Sur+place"></a>
                                <div class="price mt-2 mb-2">
                                    40€
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-center text-center">
                            <button type="button" class="btn cta cta-dark my-lg-3" id="btn-tickets" href="https://www.titi.com"
                                target="_blank">Achetez vos tickets</button>
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
        </section>
        <!-- end form  -->
    </main>

    <!-- Footer -->
    <footer id="l-footer" class=" text-center py-2">

        <div class="container">

            <p class="mx-0 small"><a href="http://kevadams-officiel.fr">kevadams-officiel.fr</a>
                <br>Réalisé par Naïma CIMPER || Kathleen MALIALIN pour Com Chez Vous<br>Copyright&copy;2020. Tous droits
                réservés.
                <a href="mentions-legales.html">Mentions légales.</a></p>

        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>