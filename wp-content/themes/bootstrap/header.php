<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/voat-style.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <?php
    // add JS for comment threading support
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    ?>
		<?php wp_head(); ?>
	</head>
 
  <body <?php body_class(isset($class) ? $class : ''); ?>>
    
    <nav class="navbar navbar-default" role="navigation">
       <a class ="text-center" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg"></a>
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
      </div><!-- /.navbar-collapse -->
    </nav>
    
    
    
    
    	
    	
