<?php

class ConexionDB {

    private static $pdo;

    private function ConexionDB(){

    }

    public static function getPDO(){
        if(!self::$pdo){
            self::$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=db_usuarios","root","1234567890");
        }
        return self::$pdo;
    }

}