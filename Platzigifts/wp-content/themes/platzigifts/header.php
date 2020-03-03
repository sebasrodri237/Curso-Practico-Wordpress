<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> <!-- Trae todas las dependencias que se cargen en el encabezado -->
</head>
<body>

<header>
    <div class="container">
           <div class="row align-items-center"> <!--align items center clase de bootstrap para alinear elementos -->
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="logo">
                <!-- Traer una imagen al header -->
            </div>
            <div class="col-8">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class' => 'menu_principal',
                            'container_class' => 'container_menu'
                        )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
    
