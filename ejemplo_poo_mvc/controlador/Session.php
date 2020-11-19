<?php
class Session {

    public static function validar($controlador, $metodo){
        if($controlador != "Login" || $metodo != "ingresar"){
            return isset($_SESSION["user"]) && $_SESSION["user"];
        }
        return true;
    }

    public static function getUser(){
        return unserialize($_SESSION["user"]);
    }

}