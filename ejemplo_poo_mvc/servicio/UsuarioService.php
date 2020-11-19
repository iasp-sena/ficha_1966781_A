<?php

class UsuarioService {

    public function consultarLogin($nombreUsuario, $clave){
        $usuario = null;

        $pdo = ConexionDB::getPDO();
        $stm = $pdo->prepare("SELECT u.*, td.codigo, td.descripcion FROM tbl_usuarios u INNER JOIN tbl_tipos_documentos td ON u.tipo_documento_id = td.id WHERE u.nombre_usuario=:nombreUsuario AND u.clave = MD5(:clave)");
        $stm->bindValue(":nombreUsuario", $nombreUsuario);
        $stm->bindValue(":clave", $clave);
        if($stm->execute()){
            if($fila = $stm->fetch(PDO::FETCH_OBJ)){
                $usuario = $this->toUsuario($fila);
            }
        } else{
            print_r($stm->errorInfo());
        }

        return $usuario;
    }

    public function consultarTodos(){
        $usuarios = [];

        $pdo = ConexionDB::getPDO();
        $stm = $pdo->prepare("SELECT u.*, td.codigo, td.descripcion FROM tbl_usuarios u INNER JOIN tbl_tipos_documentos td ON u.tipo_documento_id = td.id");
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($usuarios, $this->toUsuario($fila));
            }
        }

        return $usuarios;
    }

    public function registrarUsuario($usuario){
        $pdo = ConexionDB::getPDO();
        $stm = $pdo->prepare("INSERT INTO tbl_usuarios (tipo_documento_id, numero_documento, nombres, apellidos, nombre_usuario, clave) VALUES (:tipoDocumentoId, :numeroDocumento, :nombres, :apellidos, :nombreUsuario, MD5(:clave))");
        $stm->bindValue(":tipoDocumentoId", $usuario->getTipoDocumento(),PDO::PARAM_INT);
        $stm->bindValue(":numeroDocumento", $usuario->getNumeroDocumento(),PDO::PARAM_STR);
        $stm->bindValue(":nombres", $usuario->getNombres(),PDO::PARAM_STR);
        $stm->bindValue(":apellidos", $usuario->getApellidos(),PDO::PARAM_STR);
        $stm->bindValue(":nombreUsuario", $usuario->getNombreUsuario(),PDO::PARAM_STR);
        $stm->bindValue(":clave", $usuario->getClave(),PDO::PARAM_STR);
        
        return $stm->execute();
    }


    private function toUsuario($filaInfoUsuario){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($filaInfoUsuario->tipo_documento_id);
        $tipoDocumento->setCodigo($filaInfoUsuario->codigo);
        $tipoDocumento->setDescripcion($filaInfoUsuario->descripcion);

        $usuario = new Usuario();
        $usuario->setId($filaInfoUsuario->id);
        $usuario->setTipoDocumento($tipoDocumento);
        $usuario->setNumeroDocumento($filaInfoUsuario->numero_documento);
        $usuario->setNombres($filaInfoUsuario->nombres);
        $usuario->setApellidos($filaInfoUsuario->apellidos);
        $usuario->setNombreUsuario($filaInfoUsuario->nombre_usuario);
        return $usuario;
    }

}