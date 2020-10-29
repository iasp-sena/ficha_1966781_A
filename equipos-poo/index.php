<?php

require_once("modelo/Jugador.php");
require_once("modelo/Equipo.php");

$equipo = new Equipo("Los Magnificos");


$jugador1 = new Jugador(4,"Andres","Delantero");

$jugador2 = new Jugador(10,"Diana","Medio");

$jugador3 = new Jugador(15);
$jugador3->setNombre("Diana");
$jugador3->setPosicion("Medio");

$equipo->contratarJugador($jugador1);
$equipo->contratarJugador($jugador2);
$equipo->contratarJugador($jugador3);



foreach($equipo->getJugadores() as $jugador){
    echo "Número: " . $jugador->getNumero() . "<br/>";
    echo "Nombre: " . $jugador->getNombre() . "<br/>";
    echo "Posición: " . $jugador->getPosicion() . "<br/>";
    echo ".......................................... <br/>";
}