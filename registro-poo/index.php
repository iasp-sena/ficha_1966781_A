<?php

require_once("modelo/Instructor.php");
require_once("modelo/Aprendiz.php");
require_once("modelo/Coordinador.php");
require_once("modelo/RecursoHumano.php");

$instructor = new Instructor();
$aprendiz = new Aprendiz();
$administrativo = new Coordinador();
$administrativo2 = new RecursoHumano();

$instructor->registrar();
$aprendiz->registrar();
$administrativo->registrar();
$administrativo2->registrar();
$administrativo->despedir();
$administrativo2->despedir();


echo "Todo funciona prefectamente...";