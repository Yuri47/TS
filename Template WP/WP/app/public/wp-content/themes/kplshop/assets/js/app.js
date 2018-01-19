       jQuery(onload).ready(function() { //inicia quando o documento é carregado
           
           //insere o data-togle e data-target no item do menu chamado login que tiver o link "#yd-login"
jQuery( "a[href*=\\#yd-login]").attr("data-toggle", "modal").attr("data-target", "#modalLogin");
 
           //verifica se está logado ou não e muda as propriedades do item do menu login
       if (jQuery("a#deslogado").length) { 
             //nada acontece feijoada
       }   else if (jQuery("a#logado").length) {
        
           var temp = jQuery("#logado").attr('href');//pega o href de logout
           jQuery( "a[href*=\\#yd-login]").text('sair');//muda o nome do link
           jQuery( "a[href*=\\#yd-login]").attr("data-toggle", "none").attr("data-target", "#none"); //muda os 'data' para não ativar o modal
           jQuery( "a[href*=\\#yd-login]").attr("id", "link-login").attr("href", temp);//muda o href para o logout
           
            
       } 
           
            
       });




//data-toggle="modal" data-target="#modalLogin"


/*

         var tamanho =  $(window).width(); 
     
        
        
        
        
        
        
        
        
        
        
        
        
        if (tamanho >= 751) {
       
          $(".menu-rosa").ready(function() {
  
  
     jQuery(window).scroll(function() {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if(windowScrollPosTop >= 163) {

            
          jQuery("nav").addClass( "fixed-top" );
           jQuery("#promo").addClass( "espaco" );
            
           
         
        }
        else{
          jQuery("nav").removeClass( "fixed-top" );
           jQuery("#promo").removeClass( "espaco" );
             
        }
     });
              
           
});
        } else if(tamanho <= 750) {
            
                   $(".menu-rosa").ready(function() {
  
  
     jQuery(window).scroll(function() {
        var windowScrollPosTop = jQuery(window).scrollTop();

        if(windowScrollPosTop >= 250) {

            
          jQuery("nav").addClass( "fixed-top" );
           jQuery("#promo").addClass( "espaco-mobile" );
            
           
         
        }
        else{
          jQuery("nav").removeClass( "fixed-top" );
           jQuery("#promo").removeClass( "espaco-mobile" );
             
        }
     });
              
           
});
            
        }
        
        
        */