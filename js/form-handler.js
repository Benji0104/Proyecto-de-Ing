$(document).ready(function() {
    $('#petRegistrationForm').on('submit', function(event) {
      event.preventDefault();
  
      // Serializar datos del formulario
      var formData = $(this).serialize();
  
      $.ajax({
        url: 'guardar_reporte.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          alert('Registro exitoso');
          $('#petRegistrationForm')[0].reset(); // Limpiar el formulario
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error al registrar: ' + textStatus + ' - ' + errorThrown);
        }
      });
    });
  });
  