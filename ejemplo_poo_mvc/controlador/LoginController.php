<?php

class LoginController {

    private static $usuarioServicio;
    private static $template;

    public function __construct(){
        self::$usuarioServicio = new UsuarioService();
        self::$template = new TemplateLogin();
    }

    public function ingresar(){
        $nombreUsuario = filter_input(INPUT_POST,"nombreUsuario");
        $clave = filter_input(INPUT_POST,"clave");

        $mensaje = null;
        if($nombreUsuario && $clave){
            $usuario = self::$usuarioServicio->consultarLogin($nombreUsuario, $clave);
            if($usuario){
                $_SESSION["user"] = serialize($usuario);
                redirect("Usuario","listar");
                return;
            } else{
                $mensaje = "Valide sus credenciales.";
            }
        }

        self::$template->render(
            ["titulo"=> "Login", "mensaje" => $mensaje]
        );
    }

    public function salir(){
        session_destroy();
        redirect("Login", "ingresar");
    }

}