<?php

require_once("modelo/Jugador.php");
require_once("modelo/Equipo.php");

$equipo = new Equipo();
$equipo->setNombre("Los Magnificos");


$jugador1 = new Jugador();
$jugador1->setNumero(4);
$jugador1->setNombre("Andres");
$jugador1->setPosicion("Delantero");

$jugador2 = new Jugador();
$jugador2->setNumero(10);
$jugador2->setNombre("Diana");
$jugador2->setPosicion("Medio");

$equipo->contratarJugador($jugador1);
$equipo->contratarJugador($jugador2);



foreach($equipo->getJugadores() as $jugador){
    echo "Número: " . $jugador->getNumero() . "<br/>";
    echo "Nombre: " . $jugador->getNombre() . "<br/>";
    echo "Posición: " . $jugador->getPosicion() . "<br/>";
    echo ".......................................... <br/>";
}