/*eventos 
son funciones que se ejecutan cuando ocurre algo en la pagina web
como click, scroll, mover el raton, etc
llamar en las etiquetas html o con addEventListener
*/

window.addEventListener('DOMContentLoaded', () => {
    'use strict';
    
    var boton2 = document.getElementById('botton2');
    function cambiar_color() {
        if (!boton2) return;
        var bg = boton2.style.background;
        if (bg === "green") {
            boton2.style.background = "red";
        } else {
            boton2.style.background = "green";
        }
        boton2.style.padding = "10px";
        boton2.style.border = "none";
        return true;
    }

    // Evento click
    if (boton2) {
        boton2.addEventListener('click', cambiar_color);
        // Evento mouseover
        boton2.addEventListener('mouseover', function () {
            boton2.style.background = "#df0d0dff";
        });
        // Evento mouseout
        boton2.addEventListener('mouseout', function () {
            boton2.style.background = "yellow";
        });
    }

    
    var input = document.getElementById('nombre');
    if (input) {
        input.addEventListener('focus', function () {
            console.log("[focus] Estas dentro del input");
        });
        input.addEventListener('blur', function () {
            console.log("[blur] Estas fuera del input");
        });
        input.addEventListener('keydown', function (event) {
            console.log("[keydown] Pulsando esta tecla ", String.fromCharCode(event.keyCode));
        });
        input.addEventListener('keypress', function (event) {
            console.log("[keypress] Tecla presionada ", String.fromCharCode(event.keyCode));
        });
        input.addEventListener('keyup', function (event) {
            console.log("[keyup] Tecla soltada ", String.fromCharCode(event.keyCode));
        });
    }
});