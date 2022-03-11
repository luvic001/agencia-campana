jQuery(function($){
	$('a[href*="#"]')
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .not('[data-slide]')
	  .click(function(event) {
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        event.preventDefault();
	        $(this)	
	        	.parent()
	        	.parent()
	        	.children('li')
	        	.children('a')
	        	.removeClass('selected')

	        $(this).addClass('selected')
	        h_height = $('header').innerHeight()


	        $('html, body').animate({
	          scrollTop: target.offset().top - h_height + 40
	        }, 400);
	      }
	    }
	  });
	$('a[href="#"]').on('click', function(e){
		e.preventDefault()
	})
});