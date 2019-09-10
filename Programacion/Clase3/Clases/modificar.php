<?php

class Modificar{ 

    public static function modificarArchivo($archivo, $dni, $nuevaPersona){
        $lista = Leer::leerArchivo($archivo);
        
        unlink($archivo);
        
        foreach ($lista as $value) {

            if($value != null){
                if($value->dni == $dni){                    
                    Guardar::guardarArchivo($archivo, $nuevaPersona);
                }
                else{
                    $aux = array("nombre"=>$value->nombre,"apellido"=>$value->apellido,"dni"=>$value->dni);
                    Guardar::guardarArchivo($archivo, $aux);
                }
            }
        }
        
    }


}
?>