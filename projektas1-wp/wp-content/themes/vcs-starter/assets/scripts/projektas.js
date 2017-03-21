$(document).ready(function(){
    $('.blog-p').hide();
    $('.blogai').click(function(){
        $('.blog-p', this).slideToggle(400);
  });
});
  
                  $(document).ready(function(){                
    $('.burger').click(function(){
        $('.lol').slideToggle(400, function(){
            $('.lol').toggleClass('menu'); 
        })
    })
 }); 

$(document).ready(function(){

    
    $(".enlarge").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
    
         $(".owl-carousel").owlCarousel({
         items: 1,
         loop: true,
         autoplay: true,
         autoplayTimeout: 3000,
         autoplayHoverPause: true,
         margin: 50
         
     });
   
 }); 

function initMap() {
        var location = {lat: 51.5100756, lng: -0.1427526};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: location,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }