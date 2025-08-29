/*busquedas */
'use strict'
// crea un programa que pida 6 numeos ungresador por pantalla 
// mostrar el array entero en el cuerpo de la pagina y en la consola   
//ordenarlo y mostrarlo
//invertir su orden y mostrarlo
//mostrar cuantos elementos tiene el array
//buscar un valor introducido por el usuario y decirle si lo encuentra y su indice
//crear funcion para imprimir los resultaods en el cuerpo de la pantalla

function mostrar_array (elementos,texto="") {
    document.write ("<h1>El contenido del array"+texto+"</h1>");
     var resultado= numeros.forEach(elementos => {
    document.write("<ul>");
        document.write("<li>"+elementos+"</li>");
        document.write("</ul>");
       
    });
}



 var numeros = new Array(6);
    for (let i = 0; i < numeros.length; i++) {
        numeros[i] = parseInt(prompt("Introduce un numero",0));
        
    }
    document.write("<h1>Contenido del array</h1>");
   var resultado= numeros.forEach(valores => {
    document.write("<ul>");
        document.write("<li>"+valores+"</li>");
        document.write("</ul>");
   });
   console.log(numeros);
    //ordenar y mostrar
    var ordenar=  numeros.sort(function(a,b){return a-b});
   
        console.log(ordenar);

        //mostrar cuantos elementos tiene
        document.write("<h1>El array tiene: "+numeros.length+" elementos</h1>");

        //buscar un valor introducido por el usuario y decirle si lo encuentra y su indice
        var busqueda = parseInt(prompt("Busca un numero",0));
        var posicion = numeros.findIndex(numero => numero == busqueda);
        var valor = numeros.find(numero => numero == busqueda);
        if (posicion && posicion != -1) {
            document.write("<h1>Encontrado</h1>");
           document.write("<h1>El numero es: "+valor+"</h1>");
           document.write("<h1>En la posicion: "+posicion+"</h1>");
        }
        else{
            document.write("<h1>No encontrado</h1>");
        } 