jQuery(document).ready(function($) {

	/**
	 * 	BACK TO TOP
	 */
	if ($('.backtotop').length) {
	    
	    // var scrollTrigger = window.outerHeight,
	    var scrollTrigger = $('header').height() + $('nav.navbar').height();	
	    
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
	 * 	PINTEREST carousel
	 */
	var owl2 = $("#pinterest-carousel").owlCarousel({
	    loop:true,
	    margin:10,
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
	});



	/**
	 *
	 *    INSTAGRAM
	 *
	 * 		http://www.pinceladasdaweb.com.br/blog/2011/11/14/instagram-api/
	 * 		
	 */
	
	// var accessToken = '7fb7706503064da5943b1ee9a41557fa';
	var accessToken = '966633.be52cb0.3f2553ac28b246a790b8a8a172b6d289';
	var username= "juscchneider";
	var limit = 16; //Limite máximo de fotos
	var setSize = "medium";
	 
	var instagram = function() {
		return {
			init: function() {
				instagram.getUser();
			},
			getUser: function() {
				var getUserURL = 'https://api.instagram.com/v1/users/search?q='+ username +'&access_token='+ accessToken;
				$.ajax({
					type: "GET",
					dataType: "jsonp",
					cache: false,
					url: getUserURL,
					success: function(data) {
						var getUserID = data.data[0].id;
						
						instagram.loadImages(getUserID);
					}	
				});
			},
			loadImages: function(userID) {
				var getImagesURL = 'https://api.instagram.com/v1/users/'+ userID +'/media/recent/?access_token='+ accessToken;
				$.ajax({
					type: "GET",
					dataType: "jsonp",
					cache: false,
					url: getImagesURL,
					success: function(data) {
						for(var i = 0; i < limit; i+=1) {
							if(setSize == "small") {
								var size = data.data[i].images.thumbnail.url;
							} else if(setSize == "medium") {
								var size = data.data[i].images.low_resolution.url;
							} else {
								var size = data.data[i].images.standard_resolution.url;	
							}
							$("#ju-instagram").append("<div><a target='_blank' href='" + data.data[i].link +"'><img src='" + size +"' class='img-responsive'/></a></div>");
						}

						instagram.initCarousel();
					}
				});
			},
			initCarousel: function () {
				/**
				 * 	INSTAGRAM carousel
				 */
				var owl = $("#ju-instagram").owlCarousel({
				    loop:true,
				    margin:10,
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
			}
		}
	}();
	 
	$(document).ready(function() {
	    instagram.init();
	});
 

});