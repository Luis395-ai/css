/*Dom
Document object model
El dom se aplpica a las etiquetas html
En el caso de utilizar ddom las etiquetas html se iniializan antes de finalizar el body
*/
// Ingresar el elemento por su id
//var caja= document.getElementById("micaja").innerHTML= ("Texto en la caja desde js");
//console.log(caja);
"use strict";
// Función para cambiar color de elementos
function cambiar_color(caja, seccion, colorCaja, colorSeccion) {
    if (caja) {
        caja.style.background = colorCaja;
        caja.style.padding = "20px";
        caja.style.color = "white";
    }
    if (seccion) {
        seccion.style.background = colorSeccion;
        seccion.style.padding = "20px";
        seccion.style.color = "white";
    }
    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    // Seleccionar por id
    var caja = document.getElementById("micaja");
    if (caja) {
        caja.innerHTML = "Texto en la caja desde js";
        caja.style.background = "red";
        caja.style.padding = "20px";
        caja.style.color = "white";
        caja.className = "hola hola2";
        console.log(caja);
    }

    // Seleccionar por querySelector
    var seccion = document.querySelector("#micaja2");
    if (seccion) {
        seccion.innerHTML = "Texto en la seccion desde js";
        seccion.style.background = "blue";
        console.log(seccion);
    }

    // Seleccionar elementos por etiqueta
    var todos_los_divs = document.getElementsByTagName('div');
    if (todos_los_divs.length > 2) {
        var contenido = todos_los_divs[2];
        contenido.innerHTML = "Texto en el tercer div";
        contenido.style.background = "green";
        console.log(contenido);

        // Cambiar color del tercer div
        contenido.style.background = "purple";
    }

   
});
//recorrer todos los div con for o in
var todosdiv= document.getElementsByTagName('div');
var valor;
for(valor in todosdiv){
    if (typeof todosdiv[valor].textContent == 'string' ) {
        var parrafo= document.createElement("p");
        
    
   var parrafo= document.createElement("p");
   var texto= document.createTextNode(todosdiv[valor].innerText);
   parrafo.append(texto);
   console.log(parrafo);
   
   document.querySelector("#misection").append(parrafo);
}
}
//como llamar elemetos por su clase
 var clase= document.getElementsByClassName('micajaa');
 divlase.style.background="yellow";
 divlase[0].style.background="yellow";
 
