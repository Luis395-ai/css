/*mostrar todos los numeros que hayentre 2 numeros ingresados por el usuario */
'use strict';
var nro1= parseint (prompt('Ingrese un numero desde: '));
var nro2= parseint (prompt('Ingrese un numero desde: '));

document.write("<h1> de " +nro1+ 'a'+ nro2 + " estan esos numeros.. </h1>");
for (var i= nro1 ; i < nro2; i++) {
  document.write('<h3>'+i+ '</h3>', '<br>')
  
}