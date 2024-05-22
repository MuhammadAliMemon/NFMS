jQuery(document).ready(function() {
  jQuery('.insert-modal').click(function(e){
    e.preventDefault();
    var href = jQuery(this).attr('href');
    jQuery(href).modal('toggle');
  });
});