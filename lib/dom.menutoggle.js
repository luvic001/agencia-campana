$(document).on('click', '[menu-toggle]', event => {
  event.preventDefault();

  $('body').toggleClass('menu-open');

});