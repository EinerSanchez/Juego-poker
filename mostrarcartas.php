<?php
//Defina una función llamada “mostrarCartas” para recibir un arreglo de cartas como parámetros. 
//Esta función deberá mostrar por pantalla las cartas que se le pasan como argumento, una por la línea.
//declaro funcion
function mostrarCartas($cartas) {
    foreach ($cartas as $carta) {
        echo "$carta\n";
    }
}
?>