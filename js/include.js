include1('jquery.fancybox.css');
include2('jquery.fancybox.pack.js');
include2('finezoom.js');

function include2(url2){ 
  document.write('<script type="text/javascript" src="fancybox/'+ url2 + '"></script>'); 
  return false ;
}
function include1(url2){ 
  document.write('<link href="fancybox/'+ url2 + '" rel="stylesheet" type="text/css" media="screen">'); 
  return false ;
}

function include3(url2){ 
  document.write('<script type="text/javascript" src="js/'+ url2 + '"></script>'); 
  return false ;
}


			
$(document).ready(function($) {
	$(".fancybox-img").fancybox({
	loop: false,
			autoPlay   : false,
	});


$(".plans").fancybox({
      mouseWheel : false,
	  loop: false,
	  autoPlay   : false,
      afterShow:function(){
        console.log( $('.fancybox-image').height() );
        $('.fancybox-image').finezoom({
          max_zoom:6
        });
      }
  });	
  
  
$('.pop-img').fancybox({
        openEffect: 'elastic',
         closeEffect: 'elastic',
         prevEffect: 'fade',
         nextEffect: 'fade',
         fitToView: false, //
         maxWidth: "100%", //
             width     : 344,
             height    : 319,
         type: 'iframe',
         scrolling: 'no',
         iframe: {
             preload: false
         }
       }); 

	   
	  $('.desk_enq').fancybox({
        openEffect: 'elastic',
         closeEffect: 'elastic',
         prevEffect: 'fade',
         nextEffect: 'fade',
         fitToView: false, //
         maxWidth: "90%", //
             width     : 426,
             height    : 490,
         type: 'iframe',
         scrolling: 'no',
         iframe: {
             preload: false
         }
       }); 
 
 
	   $('.freevisit').fancybox({
        openEffect: 'elastic',
         closeEffect: 'elastic',
         prevEffect: 'fade',
         nextEffect: 'fade',
         fitToView: false, //
         maxWidth: "90%", //
             width     : 450,
             height    : 456,
         type: 'iframe',
         scrolling: 'no',
         iframe: {
             preload: false
         }
       }); 
 
 $(".price-schedule").fancybox({
            maxWidth    : 600,
            maxHeight   : 580,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        });
 
 
$(".call-me").fancybox({
            maxWidth    : 500,
            maxHeight   : 310,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        }); 
 
     $('.walkthrough').fancybox({
        openEffect: 'elastic',
         closeEffect: 'elastic',
         prevEffect: 'fade',
         nextEffect: 'fade',
         fitToView: false, //
         maxWidth: "90%", //
             width     : 800,
             height    : 450,
         type: 'iframe',
         scrolling: 'no',
         iframe: {
             preload: false
         }
       });
		$(".enquiry").fancybox({
            maxWidth    : 400,
            maxHeight   : 500,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        });	
		
		$(".book_our_visit").fancybox({
            maxWidth    : 400,
            maxHeight   : 480,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        });	
		
		$(".apply-online").fancybox({
            maxWidth    : 550,
            maxHeight   : 521,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        });	
		
		$(".mob-enquiry").fancybox({
            maxWidth    : 500,
            maxHeight   : 400,
            fitToView   : false,
            width       : '90%',
            height      : '90%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
	        	type: "iframe",
        });	
			
	
	$(".disclaimer").fancybox({
            maxWidth    : 600,
            maxHeight   : 340,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
		        type: "iframe",
        });
		
		
               		
		
});
 
 
 $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });

});

$(document).ready(function($) {
	if (($(window).width() <= 1000) && $(window).width() >= 700) {
                    $('.bxmulti').bxSlider({
                        minSlides: 2,
                        maxSlides: 2,
                        controls: true,
                        pager: false,
                        slideWidth: 381,
                        useCSS: false,
                        slideMargin: 20,
						touchEnabled: false,
						infiniteLoop: false,
						hideControlOnEnd: true,
                    });

                }
                else if ($(window).width() < 699) {
                    $('.bxmulti').bxSlider({
                        minSlides: 1,
                        maxSlides: 1,
                        controls: true,
                        pager: false,
                        slideWidth: 381,
                        useCSS: false,
                        slideMargin: 20,
						touchEnabled: false,
						infiniteLoop: false,
						hideControlOnEnd: true,
                    });

                }
                else {
                    $('.bxmulti').bxSlider({
                        minSlides: 3,
                        maxSlides: 3,
                        controls:  true,
                        pager: false,
                        slideWidth: 381,
                        useCSS: false,
                        slideMargin: 50,
						touchEnabled: false,
						infiniteLoop: false,
						hideControlOnEnd: true
                    });

                }
});

