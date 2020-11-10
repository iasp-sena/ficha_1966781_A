<?php

class UsuarioController {

    public function listar(){
        $servicio = new UsuarioService();
        $usuarios = $servicio->consultarTodos();

        include(DIR_VIEW . "usuario/lista.php");
    }

    public function registro(){
        include(DIR_VIEW . "usuario/registro.php");
    }

    public function registrar(){
        $usuario = new Usuario();
        $usuario->setNombres($_GET["nombres"]);
        $usuario->setApellidos($_GET["apellidos"]);

        $servicio = new UsuarioService();
        $usuarios = $servicio->registrarUsuario($usuario);

        $mensaje = "Usuario registrado correctamente";

        include(DIR_VIEW . "usuario/registro.php");
    }

}