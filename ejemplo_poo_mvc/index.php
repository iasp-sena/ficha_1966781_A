<?php
require("config/init.php");

$nombreClase = $_GET["controller"];//"Index";
$nombreMetodo = $_GET["method"];//"index";

if($nombreClase){
    if(Session::validar($nombreClase, $nombreMetodo)){
        $nombreClase .= "Controller";
        $controlador = new $nombreClase();
        $controlador->$nombreMetodo();
    } else{
        redirect("Login","ingresar");
    }
}