<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

register_nav_menus( array(
	'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
	'header-menu' => 'My Custom Header Menu',
	'categoria-menu' => 'Menu Categoria',
) );

wp_enqueue_script( 'yd-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array(), '4.0', true );
wp_enqueue_script( 'yd-popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), '4.0', true );









add_action('storefront_before_site', 'menu_preto', 1);



function menu_preto() {
     
    ?>
    
      <nav class="navbar py-0  navbar-expand-lg navbar-dark bg-secondary  menu-preto">
   
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span><span> MENU</span>
    
  </button>

   
 
      <?php
      
       wp_nav_menu( array( 'theme_location' => 'header-menu', 
                       'menu_class' => 'navbar-nav top-menu-preto',
                      'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                       'container' => 'div'
                      ) );
    
    ?>
  
  <span class="navbar-brand nome-menu"> </span>
  </div>
</nav>
    
    
    
    













 <div class="container">
  <div class="row menu-branco py-2">
    <div class="col-md-7">
    
    <div class="row ">
    <div class="col-4">
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							 
							<?php storefront_site_branding() ?>
						</a>
      
    </div>
    <div class="col-8">
       <div class="input-group py-3">
        <p>
         BEM VINDO, <a href="">CADASTRE-SE </a> <span>OU FAÇA</span> <a href="">LOGIN </a>
         </p>
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
 
  
  CART: <?php // storefront_cart_link(); ?>
  
  <?php // the_widget( 'WC_Widget_Cart', 'title=' ); ?>
    -->
    
  </div>
    </div> <!-- md-8 -->
        </div>
      </div> <!-- md-7 -->
    <div class="col-md-2  ">
      </div>
    <div class="col-md-3 carrinho">
      <div class="   ">
      <div class="  text-right py-3">
      <a href="<?php echo wc_get_cart_url()?>"><p class="cor-pink">MINHAS COMPRAS</p></a>
      <span><div id="site-header-cart" class="site-header-cart menu">
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php storefront_cart_link(); ?>
			</div>
			<div>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</div>
		</div></span>
      </div>
     
    </div>
    </div>
  </div> <!-- row -->
  
</div>
 


 








 <nav class="navbar  navbar-expand-lg navbar-dark bg-primary  menu-rosa " id="menu-pink">
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span><span> CATEGORIAS</span>
    
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent2">
 
    
    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'categoria-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'navbar-nav mx-auto estilo-menu' 
							)
						);
					?>
    
    
   
  </div>
  <span class="navbar-brand nome-menu text-center"> </span>
  </div>
   
</nav>
   
  




























  



<?php

    
    
    
    
}



 

 







?>






