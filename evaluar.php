<?php
//Define una función llamada “evaluarMano” que reciba un arreglo de cartas como parámetro. Esta función deberá evaluar 
//la mejor combinación posible de cartas según las reglas del póker y mostrar por pantalla el resultado obtenido.
//declaro funcion de evaluarMano
function evaluarMano($cartas) {
    // Evaluación(sin considerar el orden de las cartas)
    $valores = array();
    $palos = array();
    foreach ($cartas as $carta) {
        list($valor, $palo) = explode(" de ", $carta);
        $valores[] = $valor;
        $palos[] = $palo;
    }
    

?>