<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/open-iconic.css">
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>
	
	
	
	
	
	



 <nav class="navbar py-0  navbar-expand-lg navbar-dark bg-secondary  menu-preto">
   
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
 
    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'top-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'navbar-nav top-menu-preto',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
  </div>
  <span class="navbar-brand nome-menu">MENU</span>
  </div>
</nav>







 <div class="container">
  <div class="row menu-branco py-2">
    <div class="col-md-7">
    
    <div class="row ">
    <div class="col-4">
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="img-fluid mx-auto logo">
						</a>
      
    </div>
    <div class="col-8">
       <div class="input-group py-3">
         BEM VINDO, <a href="">CADASTRE-SE </a> OU FAÇA <a href="">LOGIN </a>
         
        <form action="" class="form-inline"> 
       <div class="input-group pesquisa">
       
      <input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
      <span class="input-group-btn">
        <button class="btn btn-primary botao-pesquisa" type="submit">
          <span class="oi" data-glyph="magnifying-glass"></span>
          </button>
      </span>
      
    </div><!-- /input-group -->
  </form>
  
  
  
   
  
  
  
  
  
  
   
    
  </div>
    </div> <!-- md-8 -->
        </div>
      </div> <!-- md-7 -->
    <div class="col-md-5">
      <div class="row  ">
      <div class="col-8 col-sm-6 divisao text-right py-3">
      <p class="cor-pink">MINHAS COMPRAS</p>
      <span>(<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>)</span>
      </div>
      <div class="col-4 col-sm-6 py-3">
       <p class="cor-pink">SUBTOTAL</p>
       <span><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" > <?php echo WC()->cart->get_cart_total(); ?></a></span>
    
          
           
       
      </div>
    </div>
    </div>
  </div> <!-- row -->
  
</div>












 <nav class="navbar  navbar-expand-lg navbar-dark bg-primary  menu-rosa " id="menu-pink">
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent2">
 
    
    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'pink-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'navbar-nav mx-auto estilo-menu',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
    
    
   
  </div>
  <span class="navbar-brand nome-menu text-center">CATEGORIAS</span>
  </div>
   
</nav>
   
  
















	<div id="wrapper" class="container">
		<div class="row">
