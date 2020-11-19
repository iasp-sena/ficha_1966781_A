<?php

class UsuarioController {

    private static $usuarioServicio;
    private static $tdServicio;
    private static $template;

    public function __construct(){
        self::$usuarioServicio = new UsuarioService();
        self::$tdServicio = new TipoDocumentoService();
        self::$template = new Template();
    }

    public function listar(){
        $usuarios = self::$usuarioServicio->consultarTodos();

        self::$template->render(
            DIR_VIEW . "usuario/lista.php",
            ["titulo"=> "Usuarios - Lista", "usuarios" => $usuarios]
        );
    }

    public function registro(){
        $tiposDocumentos = self::$tdServicio->consultarTodos();

        self::$template->render(
            DIR_VIEW . "usuario/registro.php", 
            ["titulo"=> "Usuarios - Registro", "tiposDocumentos"=>$tiposDocumentos]
        );
    }

    public function registrar(){
        $usuario = new Usuario();
        $usuario->setTipoDocumento($_POST["tipoDocumento"]);
        $usuario->setNumeroDocumento($_POST["numeroDocumento"]);
        $usuario->setNombres($_POST["nombres"]);
        $usuario->setApellidos($_POST["apellidos"]);
        $usuario->setNombreUsuario($_POST["nombreUsuario"]);
        $usuario->setClave($_POST["clave"]);

        $rta = self::$usuarioServicio->registrarUsuario($usuario);

        $mensaje = $rta ? "Usuario registrado correctamente" : "Error registrando el usuario";

        $tiposDocumentos = self::$tdServicio->consultarTodos();

        self::$template->render(
            DIR_VIEW . "usuario/registro.php",
            ["titulo"=> "Usuarios - Registro", "tiposDocumentos"=>$tiposDocumentos, "mensaje"=> $mensaje]
        );
    }

}