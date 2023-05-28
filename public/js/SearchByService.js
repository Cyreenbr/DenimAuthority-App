$(document).ready(function() {
  $('.dropdown-item.preview-item').click(function(e) {
    e.preventDefault();
    var serviceId = $(this).data('service-id');
    $.ajax({
      url: '/searchByService/' + serviceId,
      type: 'GET',
      success: function(response) {
        $('.table.table-striped tbody').html(response);
      },
      error: function(xhr) {
      }
    });
  });
});
