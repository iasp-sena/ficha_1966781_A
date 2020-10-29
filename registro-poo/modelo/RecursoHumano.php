<?php
require_once("Administrativo.php");

class RecursoHumano extends Administrativo {

    public function despedir(){
        echo "Despidiendo desde recurso humano....<br/>";
    }

}