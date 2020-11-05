<?php
require_once("Usuario.php");

abstract class Administrativo implements Usuario {

    protected static $propiedadClase = "dsadsa";
    protected $salario;

    public function registrar(){
        echo "Valor propiedad de objeto: " . $this->salario . "<br/>";
        echo "Valor propiedad de clase: " . self::$propiedadClase . "<br/>";
        echo "Registro desde administrativo....<br/>";
    }

    public function saludar(){
        echo "Saludando desde administrativo....<br/>";
    }

    public abstract function despedir();


    public function setSalario($salario){
        $this->salario = $salario;
    }

    public static function setPropiedadClase($valor){
        self::$propiedadClase = $valor;
    }

}