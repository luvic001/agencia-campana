jQuery(function($){
	// scroll functions
	$(document).on('scroll', function(){
		pos = window.pageYOffset;
		$('.background-parallax').css( 'background-position', 'center '+ -(pos/2)+'px' )
		$('.background-parallax-ctrl').css( 'background-position', 'center '+ (pos/2)+'px' )
		$('.background-parallax-relative').each(function(ind, elem){
			$elem = $(this)
			if (pos >= $elem.offset().top - $(window).innerHeight() && pos <= $elem.offset().top + $elem.innerHeight())
				$elem.css( 'background-position', 'center '+ -( (pos / 2) - $(window).innerHeight() - $elem.innerHeight() ) +'px' )
		})

	})
	pos = window.pageYOffset;
	$('.background-parallax').css( 'background-position', 'center '+ -(pos/2)+'px' )
	$('.background-parallax-ctrl').css( 'background-position', 'center '+ (pos/2)+'px' )
	$('.background-parallax-relative').each(function(ind, elem){
		$elem = $(this)
		if (pos >= $elem.offset().top - $(window).innerHeight() && pos <= $elem.offset().top + $elem.innerHeight())
			$elem.css( 'background-position', 'center '+ -( (pos / 2) - $(window).innerHeight() - $elem.innerHeight() ) +'px' )
	})

})