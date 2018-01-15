/*
    Simple Image Gallery 1.0
	license: MIT
	https://github.com/Yuri47/simpleimagegallery



*/
function gallery(idSpan, classImage) {


$(classImage).click(function(){
    var href = this.src;
         
        
       
        $('.image').attr("src", href);
        $('.zoomImg').attr("src", href);
        
        
        var imagem = new Image();
    
    imagem.onload = function() {
       var height = this.height,
           width = this.width;
     
    }
    imagem.src = href;
        
        
        var widthPage = document.getElementById('img').width,
            heightPage = document.getElementById('img').height,
            widthOrigin = imagem.width,
            heightOrigin = imagem.height;
        
        
        if (widthOrigin <= widthPage && heightOrigin <= heightPage) {
            $(idSpan).trigger('zoom.destroy');
        } else {
            $(idSpan).zoom();
        }
         
        
});
     $(idSpan).zoom();
}