<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

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
								'theme_location' => 'minha-conta',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav flex-column text-left',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
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
								'menu_class'     => 'nav flex-column text-left',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
    </div>
    <!--FIM PRODUTO -->  <!--PRODUTO -->
    <div class="col-md-4 py-4 mx-auto">
    <H5>PAGAMENTO E ENTREGA</H5>
     <img src="<?php echo get_template_directory_uri()?>/assets/images/mercadopago-logo.png" class="img-fluid" alt="Formas de pagamento">
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
   
   	<?php wp_footer(); ?>
   
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/app.js"></script>
    
    

</body>
</html>
