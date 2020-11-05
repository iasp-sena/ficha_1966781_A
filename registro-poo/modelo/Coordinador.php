<?php
require_once("Administrativo.php");

class Coordinador extends Administrativo {

    public function despedir(){
        echo "Prop. clase coordinador....". parent::$propiedadClase ."<br/>";
        parent::registrar();
        echo "Despidiendo desde coordinador....<br/>";
    }

}