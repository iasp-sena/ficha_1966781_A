<?php
require_once("Usuario.php");

class Aprendiz implements Usuario {

    public function registrar(){
        echo "Registro desde aprendiz....<br/>";
    }

    public function saludar(){
        echo "Saludando desde aprendiz....<br/>";
    }

}