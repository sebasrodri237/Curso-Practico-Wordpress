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

function assets(){

    // Forma de manejo de libreria que se cargaran antes que nuestra hoja de estilos,
    // en este caso bootstrap y una fuente
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1', 'all');
    //Nombre de la libreria, url, dependencias que recibe, version, lugares en que se cargara
    wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', '', '1.0', 'all');
    // Forma de ejecutar nuestra hoja de estilos
    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap','montserrat'), '1.0', 'all');
    //Nombre de la libreria, url(esta funcion traera nuestra hoja de estilos), dependencias que recibe, version, lugares en que se cargara
}

add_action( 'wp_enqueue_scripts', 'assets');