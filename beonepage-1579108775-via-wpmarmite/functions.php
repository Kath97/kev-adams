<?php

// /* Chargement de la feuille du style du theme parent */
// add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
// function wpchild_enqueue_styles(){
//   wp_enqueue_style( 'wpm-beonepage-style', get_template_directory_uri() . '/style.css' );
// }

add_filter('show_admin_bar', '__return_false');

// Chargement de la feuille de style du plugin Contact-form-7
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}

// Ajout de filtres pour ajouter son propre CSS au Contact-form-7
add_filter( 'wpcf7_autop_or_not', '__return_false' );

// 

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Vidéos', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Video', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Videos'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les videos'),
		'view_item'           => __( 'Voir les videos'),
		'add_new_item'        => __( 'Ajouter une nouvelle videos'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la videos'),
		'update_item'         => __( 'Modifier la videos'),
		'search_items'        => __( 'Rechercher une video'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Vidéos TV'),
		'description'         => __( 'Tous sur séries TV'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'editor'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'series-tv'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'videos', $args );

}

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Revues de presse', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Revue de presse', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Revues de presse'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les revues de presse'),
		'view_item'           => __( 'Voir les revues de presse'),
		'add_new_item'        => __( 'Ajouter une nouvelle revue de presse'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la revue de presse'),
		'update_item'         => __( 'Modifier la revue de presse'),
		'search_items'        => __( 'Rechercher une revue de presse'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);

	$args = array(
		'label'               => __( 'Revues de presse'),
		'description'         => __( 'Tous sur revues de presse'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array('editor','title','custom-fields'),
	// 	/* 
	// 	* Différentes options supplémentaires
	// 	*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'revues de presse'),

	);
	register_post_type( 'revues de presse', $args );


add_action( 'init', 'wpm_custom_post_type', 0 );



