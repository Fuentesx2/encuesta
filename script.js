function validarFormulario() {
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
  
    if (nombre === '' || email === '' || !validarFormatoEmail(email)) {
      alert('Por favor, complete todos los campos correctamente.');
      return false;
    }
    return true;
  }
  
  function validarFormatoEmail(email) {
    // Implementa una validación de formato de correo electrónico según tus requisitos.
    return true;
  }
  
  function mostrarMensajeAgradecimiento() {
    // Oculta el formulario
    document.querySelector('form').style.display = 'none';
    // Muestra el mensaje de agradecimiento
    document.getElementById('agradecimiento').style.display = 'block';
    // También puedes redirigir a una página de agradecimiento si lo prefieres
    // window.location.href = 'gracias.html';
  }
  