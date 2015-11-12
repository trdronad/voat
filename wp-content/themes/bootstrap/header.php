<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <title><?php wp_title(); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
      <?php
         // add JS for comment threading support
         if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
         ?>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(isset($class) ? $class : ''); ?>>
      <nav class="navbar navbar-default" role="navigation">
         <a href="<?php echo home_url(); ?>"> <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> </a>
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse">
            <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
         </div>
         <!-- /.navbar-collapse -->
      </nav>