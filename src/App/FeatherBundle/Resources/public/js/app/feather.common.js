$('#transmission_authentication').change(function(){
    if (this.checked) {
      $('#transmission_authinfo').fadeIn('slow');
    } else {
      $('#transmission_authinfo').hide().fadeOut('slow');
    }                   
});

$('#transmission_authinfo').hide();
$('#transmission_authentication').removeAttr('checked');

$('#transmission_lostinfo').change(function(){
    if (this.checked) {
      $('#transmission_property').fadeOut('slow');
    } else {
      $('#transmission_property').fadeIn('slow');
    }                   
});