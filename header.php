<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">

		<!-- Inicio Wordpress Header -->
		<?php wp_head(); ?>
		<!-- Final Wordpress Header -->
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark">
	        <div class="container">
	            <a href="/" class="navbar-brand">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Cliente">
	            </a>  		
	            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            
	            <div id="navbarCollapse" class="collapse navbar-collapse">
	                <div class="navbar-nav">
	                    <a href="<?php echo get_site_url(); ?>/sobre-nos" class="nav-item nav-link">SOBRE NÓS</a>
	                </div>
	            </div>
	        </div>
		</nav>