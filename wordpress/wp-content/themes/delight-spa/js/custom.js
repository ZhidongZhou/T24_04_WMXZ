jQuery(function($){
 "use strict";
   jQuery('.main-menu-navigation > ul').superfish({
     delay:       500,                            
     animation:   {opacity:'show',height:'show'},  
     speed:       'fast'                        
   });

});

function resMenu_open() {
      document.getElementById("sidelong-menu").style.width = "250px";
}
function resMenu_close() {
  document.getElementById("sidelong-menu").style.width = "0";
}

jQuery(document).ready(function() {
    if( jQuery( '#slider' ).length > 0 ){
        jQuery('.nivoSlider').nivoSlider({
            effect:'fade',
            animSpeed: 500,
            pauseTime: 3000,
            startSlide: 0,
			directionNav: true,
			controlNav: false,
			pauseOnHover:false,
		});
    }
});