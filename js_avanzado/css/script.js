$(document).ready(function() {
   // Solo letras y espacios para nombre
   $('#name').on('keyup blur', function(){ 
      var node = $(this);
      node.val(node.val().replace(/[^a-zA-Z ]/g,''));
   });
   // Solo letras y espacios para apellido
   $('#apellido').on('keyup blur', function(){ 
      var node = $(this);
      node.val(node.val().replace(/[^a-zA-Z ]/g,''));
   });
   // Solo números para cedula
   $('#cedula').on('keyup blur', function(){ 
      var node = $(this);
      node.val(node.val().replace(/[^0-9]/g,''));
   });
   // Validación de email
   $('#email').on('input', function(event) {
      var campo = event.target;
      var valido = $('#emailOK');
      var emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (emailReg.test(campo.value)) {
         valido.text('válido');
         valido.css('color', 'green');
      } else {
         valido.text('incorrecto');
         valido.css('color', 'red');
      }
   });
});