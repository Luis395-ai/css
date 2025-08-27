
var nr1 = parseInt(prompt('Ingrese el valor 1:', 0));


var nr2 = parseInt(prompt('Ingrese el valor 2:', 0));


while (isNaN(nr1) || isNaN(nr2)) {

  alert('Por favor, ingrese solo números.');
  nr1 = parseInt(prompt('Vuelve a ingresar el valor 1:', 0));
  nr2 = parseInt(prompt('Vuelve a ingresar el valor 2:', 0));
}

if (nr1 > nr2) {
  alert('El valor 1 es mayor.');
} else if (nr2 > nr1) {
  alert('El valor 2 es mayor.');
} else {
 
  alert('Los dos valores son iguales.');
}