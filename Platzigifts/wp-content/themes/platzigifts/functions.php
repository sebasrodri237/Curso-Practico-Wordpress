<?php 

function init_template(){

    // funcion de wordpress para agregar funcionalidades extra a los temas
    add_theme_support('post-thumbnails');
    // Esta funcionalidad permite en nuestra entrada agregar una imagen destacada
    add_theme_support('titletag');
    // Imprime en el header el titulo de la pagina
}
// Esto es un hook
add_action( 'after_setup_theme', 'init_template');
// Cuando alguien ingrese al sitio WP elige el tema y ejecute las opciones