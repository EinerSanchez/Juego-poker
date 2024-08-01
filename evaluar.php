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
    
    // Verificar si es un par
    if (count(array_unique($valores)) == 4) {
        echo "Mano: Par\n";
    }
    // Verificar si es un trío
    elseif (count(array_unique($valores)) == 3) {
        echo "Mano: Trío\n";
    }
    // Verificar si es una escalera
    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores)) {
        echo "Mano: Escalera\n";
    }
    // Verificar si es un color
    elseif (count(array_unique($palos)) == 1) {
        echo "Mano: Color\n";
    }
    // Verificar si es una escalera de color
    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores) && count(array_unique($palos)) == 1) {
        echo "Mano: Escalera de color\n";
    }
    else {
        echo "Mano: Carta alta\n";
    }
}

?>