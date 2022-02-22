function send_meta(meta_event, meta_category, meta_value){
  gtag('event', meta_event, {
    'event_category': meta_category,
    'event_label': meta_value
  });
}