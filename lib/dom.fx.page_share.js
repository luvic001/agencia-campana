$(document).on('click', '[page-share]', function(event){
  event.preventDefault();

  var SHARE_URL = `${site_url}/${cardapio_url}`;
  
  const SHARE_DATA = {
    title: cardapio_name,
    url: SHARE_URL,
    text: ''
  };

  if (navigator.share) {
    navigator.share(SHARE_DATA);
  }
});