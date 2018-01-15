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
wp_enqueue_script( 'yd-popper', get_stylesheet_directory_uri() . '/assets/js/popper.js', array(), '4.0', true );









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
    
    <?php
     
    
}



























?>






