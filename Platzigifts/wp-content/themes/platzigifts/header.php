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
        <div class="row">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="logo">
                <!-- Traer una imagen al header -->
            </div>
        </div>
    </div>
</header>
    
