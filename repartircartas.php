<?php
//1 Define una función llamada “repartirCartas” que no reciba ningún parámetro. Esta función deberá generar y devolver un arreglo con 5 cartas aleatorias del mazo. Puedes representar cada carta como una cadena de texto,
// por ejemplo: “As de corazones”, “Reina de Picas”, etc. Puedes utilizar un arreglo asociativo o una matriz para representar el mazo de cartas.

//Declaro funcion
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
//retornar las cartas
    return $cartas;
}
//mostrar en pantalla las cartas
$cartas= repartirCartas();
print_r ($cartas);
?>