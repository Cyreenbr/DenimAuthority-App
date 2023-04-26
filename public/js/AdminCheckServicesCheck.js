$(document).ready(function() {
    $('#admin-checkbox').click(function() {
      if($(this).is(':checked')) {
        $('.service-checkbox').prop('checked', true);
      } 
    });
  });
  