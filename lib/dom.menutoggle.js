$(document).on('click', '[menu-toggle]', event => {
  event.preventDefault();

  $('body').toggleClass('menu-open');

});

$(document).on('click',  'section.megamenu ul a', function(){
  $('body').removeClass('menu-open')
});