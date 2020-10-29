<?php

require_once("Usuario.php");

final class Instructor implements Usuario {

    public function registrar(){
        echo "Registro desde instructor....<br/>";
    }

    public function saludar(){
        echo "Saludando desde instructor....<br/>";
    }

}