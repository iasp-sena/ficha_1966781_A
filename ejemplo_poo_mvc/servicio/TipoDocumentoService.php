<?php

class TipoDocumentoService {

    public function consultarTodos(){
        $tiposDocumentos = [];

        $pdo = ConexionDB::getPDO();
        $stm = $pdo->prepare("SELECT * FROM tbl_tipos_documentos ");
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($tiposDocumentos, $this->toTipoDocumento($fila));
            }
        }

        return $tiposDocumentos;
    }

    private function toTipoDocumento($filaInfoTipoDocumento){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($filaInfoTipoDocumento->id);
        $tipoDocumento->setCodigo($filaInfoTipoDocumento->codigo);
        $tipoDocumento->setDescripcion($filaInfoTipoDocumento->descripcion);
        return $tipoDocumento;
    }

}