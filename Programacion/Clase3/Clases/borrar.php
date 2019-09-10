<?php

class Borrar{


    public static function borrarPersona($archivo, $dni){
        $lista = Leer::leerArchivo($archivo);
        
        unlink($archivo);
        
        foreach ($lista as $value) {
            if($value != null){
                if($value->dni != $dni){
                    $aux = array("nombre"=>$value->nombre,"apellido"=>$value->apellido,"dni"=>$value->dni);
                    Guardar::guardarArchivo($archivo, $aux);
                }
            }
        }
    }
}
?>