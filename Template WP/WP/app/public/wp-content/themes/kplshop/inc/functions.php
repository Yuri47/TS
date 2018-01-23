<?php





//REGISTRAR MENUS
register_nav_menus( array(
	'menu_top' => 'Menu Top',
	'menu_categoria' => 'Menu Categoria',
	'minha_conta' => 'Minha Conta',
	'politicas' => 'Políticas',
) );









//HOOKS
add_action('yd-header', 'menu_preto', 1);
add_action('yd-header', 'menu_branco', 3);
add_action('yd-header', 'menu_categoria', 5);
add_action('storefront_before_site', 'modal_login', 1);
 



//FUNÇÕES

function mostrar_nome() {
                $name = get_currentuserinfo()->display_name;
              echo $name . " (não é $name? <a href=" . wp_logout_url( get_permalink() ). " id='logado'>SAIR</a>)";
          }
function ola() {
        ?>
        <span> JÁ COMPROU CONOSCO ANTES? FAÇA</span> <a href="#" data-toggle="modal" data-target="#modalLogin" id='deslogado'>LOGIN </a>
        <?php
    }
         

//HEADER
function menu_preto() {
     
    ?>
    
      <nav class="navbar py-0  navbar-expand-lg navbar-dark bg-secondary  menu-preto">
   
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span><span> MENU</span>
    
  </button>

   
 
      <?php
      
       wp_nav_menu( array( 'theme_location' => 'menu_top', 
                       'menu_class' => 'navbar-nav top-menu-preto',
                      'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                       'container' => 'div'
                      ) );
    
    ?>
  
  <span class="navbar-brand nome-menu"> </span>
  </div>
</nav>
     


<?php

     
    
}

function menu_branco() {
    




?>





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
       
        
        
         OLÁ, <?php if (is_user_logged_in() ? mostrar_nome() : ola()); ?>
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
       <span>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/whats-rosa.png" alt="">
          
         </span>
      </div>
    <div class="col-md-3 carrinho">
      <div class="   ">
      <div class="  text-right py-3">
      <a href="<?php echo wc_get_cart_url()?>"><p class="cor-pink minhas-compras">CARRINHO DE COMPRAS</p></a>
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
  

 <?php



}

  
function menu_categoria () {
    
    
    
    ?>


 <nav class="navbar  navbar-expand-lg navbar-dark bg-primary  menu-rosa " id="menu-pink">
  <div class="container cor-branco">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span><span> CATEGORIAS</span>
    
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent2">
 
    
    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu_categoria',
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
 

function modal_login() {
     
    ?>
    <!-- Modal -->
<div class="modal fade " id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php
          
          
          if (is_user_logged_in() ? mostrar_nome() : woocommerce_login_form());
          ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
<?php
}






?>