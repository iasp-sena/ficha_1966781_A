<?php
require("config/init.php");

$nombreClase = $_GET["controller"];//"Index";
$nombreMetodo = $_GET["method"];//"index";

if($nombreClase){
    $nombreClase .= "Controller";
    $controlador = new $nombreClase();
    $controlador->$nombreMetodo();
}