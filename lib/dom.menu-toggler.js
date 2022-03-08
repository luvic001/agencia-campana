$(document).on('click', '[toggle-menu--footer]', function(event){
  event.preventDefault();

  let element_handle = $(this);

  element_handle.parent().toggleClass('active');
  element_handle.parent().find('.menu-content').slideToggle();

});