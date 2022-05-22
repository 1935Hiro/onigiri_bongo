require('jquery-jpostal-ja');
$(window).ready(function() {
   $('#postcode1').jpostal({
    postcode : [
      '#postcode1',
      '#postcode2'
    ],
    address : {
      '#address1'  : '%3%4%5',
      // '#address2'  : '%5',
      // '#address3'  : '%5'
    }
  });
});