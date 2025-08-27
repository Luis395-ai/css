'use strict';

var nro1 = parseInt(prompt('Ingrese un valor: '));
var nro2 = parseInt(prompt('Ingrese otro valor: '));

while (nro1 <= nro2) {
  if (nro1 % 2 === 0) {
    document.write(nro1 + ' es PAR <br>');
  } else {
    document.write(nro1 + ' es IMPAR <br>');
  }
  nro1++;
}
