<?php
//declarar funcion de repartircartas
function repartirCartas() {
    // Definir el mazo de cartas
    $mazo = array(
        "As de corazones", "2 de corazones", "3 de corazones", "4 de corazones", "5 de corazones", "6 de corazones", "7 de corazones", "8 de corazones", "9 de corazones", "10 de corazones", "Jota de corazones", "Reina de corazones", "Rey de corazones",
        "As de diamantes", "2 de diamantes", "3 de diamantes", "4 de diamantes", "5 de diamantes", "6 de diamantes", "7 de diamantes", "8 de diamantes", "9 de diamantes", "10 de diamantes", "Jota de diamantes", "Reina de diamantes", "Rey de diamantes",
        "As de picas", "2 de picas", "3 de picas", "4 de picas", "5 de picas", "6 de picas", "7 de picas", "8 de picas", "9 de picas", "10 de picas", "Jota de picas", "Reina de picas", "Rey de picas",
        "As de tréboles", "2 de tréboles", "3 de tréboles", "4 de tréboles", "5 de tréboles", "6 de tréboles", "7 de tréboles", "8 de tréboles", "9 de tréboles", "10 de tréboles", "Jota de tréboles", "Reina de tréboles", "Rey de tréboles"
    );

    // Repartir 5 cartas aleatorias
    $cartas = array();
    for ($i = 0; $i < 5; $i++) {
        $carta = $mazo[array_rand($mazo)];
        $cartas[] = $carta;
        unset($mazo[array_search($carta, $mazo)]);
    }

    return $cartas;
}
//funcion de mostrar cartas 
function mostrarCartas($cartas) {
    foreach ($cartas as $carta) {
        echo "$carta\n";
    }
}
//funcion de evaluarmano
function evaluarMano($cartas) {
    // Evaluación básica de la mano (sin considerar el orden de las cartas)
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
        echo "La mejor combinacion es: Trío\n";
    }
    // Verificar si es una escalera
    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores)) {
        echo "La mejor combinacion es: Escalera\n";
    }
    // Verificar si es un color
    elseif (count(array_unique($palos)) == 1) {
        echo "La mejor combinacion es: Color\n";
    }
    // Verificar si es una escalera de color
    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores) && count(array_unique($palos)) == 1) {
        echo "La mejor combinacion es: Escalera de color\n";
    }
    else {
        echo "La mejor combinacion es: Carta alta\n";
    }
}
//ejecucion de todas las funciones
$cartas = repartirCartas();
mostrarCartas($cartas);
evaluarMano($cartas);
?>