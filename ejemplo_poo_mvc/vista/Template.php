<?php

class Template {

    public function render($urlContenido, $data = []){
        include(DIR_VIEW . "template/head.php");

        include($urlContenido);

        include(DIR_VIEW . "template/footer.php");
    }

}