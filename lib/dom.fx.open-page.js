$.open_page = page_name => {
  let class_name_to_add = `page-${page_name}-open`;
  $('body').addClass(class_name_to_add);
}

$.close_page = page_name => {
  let class_name_to_remove = `page-${page_name}-open`;
  $('body').removeClass(class_name_to_remove);
}

$(document).on('click', '[page-close]', function(event){
  event.preventDefault();
  let element_handle = $(this);
  let page_target = element_handle.attr('page-close');
  $.close_page(page_target);
});

$(document).on('click', '[page-open]', function(event){
  event.preventDefault();
  let element_handle = $(this);
  let page_target = element_handle.attr('page-open');
  $.open_page(page_target);
});