<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>


	<footer id="footer" role="contentinfo">
	
	
	
	
         <div class="container conteudo text-center py-4">
       
       <h1>TENTAÇÃO SEXY</h1>
       
       
       <div class="row ">
   
   
       
   <!--PRODUTO -->
    <div class="col-md-4 py-4 mx-auto">
    <H5>MINHA CONTA</H5>
    

    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'minha_conta',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav flex-column text-left'
							)
						);
					?>
   
 
    </div>
    <!--FIM PRODUTO -->
    
     <!--PRODUTO -->
    <div class="col-md-4 py-4 mx-auto">
    <H5>POLÍTICAS</H5>
    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'politicas',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav flex-column text-left' 
							)
						);
					?>
    </div>
    <!--FIM PRODUTO -->  <!--PRODUTO -->
    <div class="col-md-4 py-4 mx-auto">
    <H5>PAGAMENTO E ENTREGA</H5>
    <a href="/pagamento-e-entrega">
     <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/mercadopago-logo.png" class="img-fluid" alt="Formas de pagamento">
     </a>
    </div>
    <!--FIM PRODUTO -->
    
    
    
  </div><!--Row -->
  
       
       
       
       </div>
       
       <div class="feito">
       
         
           <div class="container conteudo text-center py-3">
             <?php bloginfo( 'name' ); ?> - <?php echo date( 'Y' ); ?>
                 </div>
       </div>
	 
	</footer><!-- #footer -->
  
   

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
