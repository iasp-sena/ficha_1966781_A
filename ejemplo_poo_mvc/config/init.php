<?php
session_start();

define("CONTEXT_ROOT","/1966781A/ejemplo_poo_mvc");

define("APP_ROOT",$_SERVER["DOCUMENT_ROOT"].CONTEXT_ROOT);
define("DIR_CONTROLLER", APP_ROOT. "/controlador/");
define("DIR_MODEL", APP_ROOT. "/modelo/");
define("DIR_VIEW", APP_ROOT. "/vista/");
define("DIR_SERVICE", APP_ROOT. "/servicio/");






include("autoload.php");
include("funciones.php");