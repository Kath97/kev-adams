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
    <?php wp_head();?>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    
</head>

<body>

    <!-- header -->
    <header id="accueil">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content"
                    aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Brand -->
                <h1 class="navbar-brand" id="brand" href="#accueil">#sois10ans</h1>

                <!-- Items -->
                <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                <?php wp_nav_menu(array(
            'theme_location' => 'Top',
            'menu_class' =>'navbar-nav'));?>
            </div>
            </nav>
         
    </header>
   