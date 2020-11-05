<?php

require_once("modelo/Instructor.php");
require_once("modelo/Aprendiz.php");
require_once("modelo/Coordinador.php");
require_once("modelo/RecursoHumano.php");

$instructor = new Instructor();
$aprendiz = new Aprendiz();
$administrativo = new Coordinador();
$administrativo2 = new RecursoHumano();

//$instructor->registrar();
//$aprendiz->registrar();
/*
$administrativo->setSalario(1000);
$administrativo2->setSalario(30000);
Administrativo::setPropiedadClase(432423432);
echo "*******************************************<br/>";
$administrativo->registrar();
echo "*******************************************<br/>";
$administrativo2->registrar();
echo "*******************************************<br/>";
*/
$administrativo->despedir();
echo "*******************************************<br/>";
$administrativo2->despedir();


echo "Todo funciona prefectamente...";