<?php
//declarar funcion de repartircartas
function repartirCartas() {
   
    $mazo = array(
        "As de ♥", "2 de ♥", "3 de ♥", "4 de ♥", "5 de ♥", "6 de ♥", "7 de ♥", "8 de ♥", "9 de ♥", "10 de ♥", "Jota de ♥", "Reina de ♥", "Rey de ♥",
        "As de ♦", "2 de ♦", "3 de ♦", "4 de ♦", "5 de ♦", "6 de ♦", "7 de ♦", "8 de ♦", "9 de ♦", "10 de ♦", "Jota de ♦", "Reina de ♦", "Rey de ♦",
        "As de ♠", "2 de ♠", "3 de ♠", "4 de ♠", "5 de ♠", "6 de ♠", "7 de ♠", "8 de ♠", "9 de ♠", "10 de ♠", "Jota de ♠", "Reina de ♠", "Rey de ♠",
        "As de ♣", "2 de ♣", "3 de ♣", "4 de ♣", "5 de ♣", "6 de ♣", "7 de ♣", "8 de ♣", "9 de ♣", "10 de ♣", "Jota de ♣", "Reina de ♣", "Rey de ♣"
    );

    // Repartir 5 cartas aleatorias
    $cartas = array();
    for ($i = 0; $i < 5; $i++) {
        $carta = $mazo[array_rand($mazo)];
        $cartas[] = $carta;
        unset($mazo[array_search($carta, $mazo)]);
    }
//retornar las cartas
    return $cartas;
}
//declaro funcion de mostrar cartas 
function mostrarCartas($cartas) { 
    echo"Tu mano de carta es:\n";
    foreach ($cartas as $carta) {
        echo "$carta\n";
    }
}
// declaro funcion de evaluarmano
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
        echo "La mejor combinacion es: Par\n";
    }
 
    elseif (count(array_unique($valores)) == 3) {
        echo "La mejor combinacion es: Trío\n";
    }

    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores)) {
        echo "La mejor combinacion es: Escalera\n";
    }
  
    elseif (count(array_unique($palos)) == 1) {
        echo "La mejor combinacion es: Color\n";
    }
   
    elseif (in_array("As", $valores) && in_array("2", $valores) && in_array("3", $valores) && in_array("4", $valores) && in_array("5", $valores) && count(array_unique($palos)) == 1) {
        echo "La mejor combinacion es: Escalera de color\n";
    }
    else {
        echo "La mejor combinacion es: Carta alta\n";
    }
}
//ejecucion 
$cartas = repartirCartas();
mostrarCartas($cartas);
evaluarMano($cartas);

$repartir = true; 

while (true) {
    echo "1. Quieres volver a repartit cartas\n";
    echo "2. Salir\n";
    $opcion = readline("Ingrese una opción: ");
    
    switch ($opcion) {
      case 1:
        $cartas = repartirCartas();
        mostrarCartas($cartas);
        evaluarMano($cartas);
        break;
      case 2:
        echo "Saliendo...\n";
        echo "Exito al salir";
        exit;
        default: 
        echo "¡opcion invalida!";
        exit;
        break;
    }
  }
  
?>