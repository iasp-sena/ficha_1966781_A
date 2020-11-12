<?php
function getUrlControllerMethod($controller,$method){
    return CONTEXT_ROOT . "/index.php?controller=$controller&method=$method";
}