<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'header-menu' => 'My Custom Header Menu',
) );

wp_enqueue_script( 'yd-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array(), '4.0', true );
wp_enqueue_script( 'yd-popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), '4.0', true );









add_action('storefront_before_site', 'menu_preto', 1);



function menu_preto() {
     
    ?>
    
      <nav class="navbar py-0  navbar-expand-lg navbar-dark bg-secondary  menu-preto">
   
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>

   
 
      <?php
      
       wp_nav_menu( array( 'theme_location' => 'header-menu', 
                       'menu_class' => 'navbar-nav top-menu-preto',
                      'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                       'container' => 'div'
                      ) );
    
    ?>
  
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
  
  
  
   
  
  <!-- A função de cima mostra o a quantidade de itens e o valor.
  A função de baixo mostra a lista dos itens 
  Tudo funcionando AJAX
  -->
  
  CART: <?php storefront_cart_link(); ?>
  
  <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
   
    
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
								'menu_class'     => 'navbar-nav mx-auto estilo-menu' 
							)
						);
					?>
    
    
   
  </div>
  <span class="navbar-brand nome-menu text-center">CATEGORIAS</span>
  </div>
   
</nav>
   
  




























  



<?php

    
    
    
    
}



 

 







?>






