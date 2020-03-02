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

function assets(){// Forma de manejo de librerias en las que se cargaran como dependencias 
//CSS
    // Estas dependencias antes que nuestra hoja de estilos pero no las inicializara dentro del navegador
    // en este caso bootstrap y una fuente
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1', 'all');
    //Nombre de la libreria, url, dependencias que recibe, version, lugares en que se cargara
    wp_register_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', '', '1.0', 'all');
    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap','montserrat'), '1.0', 'all');
    // Poner en cola para inicializar nuestra hoja de estilos y las libreria cargadas (dependencias)
    //Nombre de la libreria, url(esta funcion traera nuestra hoja de estilos), dependencias que recibe, version, lugares en que se cargara

//Javascript
    wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '', '1.16.0', true);
    //Nombre de la libreria, url, dependencias que recibe, version, se cargara en footer: true en header: false
    // Poner en cola bootstrap, aunque la web de bootstrap pedia incorporar JQUERY wordpress por defecto ya lo tiene incorporado en sus librerias.
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true);
    //Nombre de la libreria, url, dependencias que recibe, version, se cargara en footer: true en header: false
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/javascript/custom.js', '', '1.0', true);
    //Cargar un archivo javascript propio
    //Nombre, Forma de llamar archivo (en este caso dinamica, es decir, mediante una funcion llamar al archivo desde cualquier url de nuestro template(plantilla)
    // ,dependencias a cargar, version y true para footer)
}

add_action( 'wp_enqueue_scripts', 'assets');