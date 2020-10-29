<?php
require_once("Administrativo.php");

class Coordinador extends Administrativo {

    public function despedir(){
        echo "Despidiendo desde coordinador....<br/>";
    }

}