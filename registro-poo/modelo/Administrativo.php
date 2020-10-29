<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    public function registrar(){
        echo "Registro desde administrativo....<br/>";
    }

    public function saludar(){
        echo "Saludando desde administrativo....<br/>";
    }

    public abstract function despedir();

}