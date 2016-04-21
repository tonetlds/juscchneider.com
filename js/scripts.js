$(document).ready(function() {

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

	}

});