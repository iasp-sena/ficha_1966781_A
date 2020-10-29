<?php

class Equipo {

    private $nombre = "";
    private $jugadores = [];

    public function __construct($nombre){
        echo "Estamos instanciando un objeto Equipo...<br/>";
        $this->nombre = $nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setJugadores($jugadores){
        $this->jugadores = $jugadores;
    }

    public function getJugadores(){
        return $this->jugadores;
    }

    public function contratarJugador($jugador){
        if(!$this->jugadores){
            $this->jugadores = [];
        }
        array_push($this->jugadores, $jugador);
    }

}