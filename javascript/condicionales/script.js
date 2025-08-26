/*condicionales */
//if elseif y else
var numero= 8;
if (numero<10) {
    alert('El numero es: '+numero);

}else if (numero == 10) {
     alert('El numero es: '+numero);
}
else {
     alert('El numero es: '+numero);
}
//swich
var edad=80;
var imprimir ="";

switch (edad) {
    case 18:
        imprimir= "Eres menor de edad";
        break;
       case 50:
       imprimir="Eres unn adulto";
       case 80:
        imprimir="Eres un adulto"
    default:
        imprimir="tienen otra edad"
        break;
}
document.write(imprimir);