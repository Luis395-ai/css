var suma = 0;
var contador = 0;
var numero;
do {
  numero = parseInt(prompt('Ingrese los numeros (para salir, ingrese un numero negativo): ', 0));

  if (contador == 3) {
    alert('Si queres parar, ingresa un numero negativo');
  }
  if (isNaN(numero)) {
    numero = 0;
  } else if (numero >= 0) {
    suma = suma + numero;
    contador++;
  }
} while (numero >= 0);
if (contador > 0) {
  alert('La suma es: ' + suma);
  alert('El promedio es: ' + (suma / contador));
} else {
  alert('No ingresaste ningun numero valido.');
}
