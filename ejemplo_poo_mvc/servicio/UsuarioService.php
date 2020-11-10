<?php

class UsuarioService {

    public function consultarTodos(){
        $usuario1 = new Usuario();
        $usuario1->setId(1);
        $usuario1->setNombres("Carlos");
        $usuario1->setApellidos("Ramirez");

        $usuario2 = new Usuario();
        $usuario2->setId(2);
        $usuario2->setNombres("Andres");
        $usuario2->setApellidos("Díaz");

        $usuarios = [];
        array_push($usuarios, $usuario1);
        array_push($usuarios, $usuario2);

        return $usuarios;
    }

    public function registrarUsuario($usuario){
        echo "Registrando el usuario....<br/>";
        echo $usuario->getNombres . " " . $usuario->getApellidos() . "<br/>";
    }

}