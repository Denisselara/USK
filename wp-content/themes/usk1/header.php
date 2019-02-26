<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('USK-DESIGN'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
  <?php
  	$custom_logo_id = get_theme_mod( 'custom_logo' );
  	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <!-- COMIENZO DE LA NAVEGACIÓN -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid margin__right">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand logo_absolute" href="index.html"><img src="<?php echo $logo[0]; ?>" alt="" class="img__logonav"> </a>
        </div>

          <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
            <?php wp_nav_menu( array(
            'theme_location' 	=> 'header-menu',
            'container_id'		=> 'bs-example-navbar-collapse-1',
            'container_class' 	=> 'collapse navbar-collapse',
            'menu_class'     	=> 'nav navbar-nav navbar-right color-nav'
            )
            ); ?>
          <?php } ?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right color-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="">Bio</a></li>
            <li><a href="">Proyectos</a></li>
            <li><a href="">Contacto</a></li>
          </ul>
        </div><! /.navbar-collapse -->

      </div> <!--Cierre container fluid-->
    </nav>
