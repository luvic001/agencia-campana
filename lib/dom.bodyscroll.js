$(window).on('scroll', function(){
  if (window.pageYOffset > 0) {
    $('body').addClass('body-scrolled');
  }
  else {
    $('body').removeClass('body-scrolled');
  }
});