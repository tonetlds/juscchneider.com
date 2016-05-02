$(document).ready(function() {


	/**
	 * 	BACK TO TOP
	 */
	if ($('.backtotop').length) {
	    
	    var scrollTrigger = window.outerHeight,
	    
	    backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.backtotop').removeClass('hide');
            } else {
                $('.backtotop').addClass('hide');
            }
        };
	    
	    backToTop();
	    
	    $(window).on('scroll', function () {
	        backToTop();
	    });	    

		$('.backtotop').click(function(e) {

			e.preventDefault();

			$('html, body').animate({
	            scrollTop: 0
	        }, 700);

		});

	};



	/**
	 * 	INSTAGRAM carousel
	 */
	var owl = $(".owl-carousel").owlCarousel({
	    loop:true,
	    margin:20,
	    nav:false,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1	            
	        },
	        600:{
	            items:3	            
	        },
	        1000:{
	            items:4	           	            
	        }
	    }
	});	
	
	$('#owl-carousel-instagram-next').click(function(e) {
		e.preventDefault();
	    owl.trigger('next.owl.carousel');
	})
	$('#owl-carousel-instagram-prev').click(function(e) {
		e.preventDefault();	  
	    owl.trigger('prev.owl.carousel', [300]);
	});



	/**
	 * 	PINTEREST carousel
	 */
	var owl2 = $("#pinterest-carousel").owlCarousel({
	    loop:true,
	    margin:20,
	    nav:false,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1	            
	        },
	        600:{
	            items:3	            
	        },
	        1000:{
	            items:4	           	            
	        }
	    }
	});	
	
	$('#owl-carousel-pinterest-next').click(function(e) {
		e.preventDefault();
	    owl2.trigger('next.owl.carousel');
	})
	$('#owl-carousel-pinterest-prev').click(function(e) {
		e.preventDefault();	    
	    owl2.trigger('prev.owl.carousel', [300]);
	})

});