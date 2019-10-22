$(document).ready(function () {
  var button = $('#button');
  var modal = $('#modal');
  var close = $('#close')
  button.on('click', function () {
    modal.addClass('modal_active')

  });

  $('#offer-form').on('submit', function name(event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize(),
      success: function (response) {
        console.log('Прибыли данные: ' + response);
        $('#offer-form')[0].reset();
        modal.addClass('modal_active')
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(jqXHR + " " + textStatus);
      }
    });
  })

  close.on('click', function () {

    modal.removeClass('modal_active')

  });
});