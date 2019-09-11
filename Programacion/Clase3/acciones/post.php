<?php

class Post{


    public static function guardarArchivo($archivo, $aux){
        $ar = fopen($archivo, "a");
        fwrite($ar, json_encode($aux).PHP_EOL);

        fclose($ar);
        
    }
    


    
    public static function borrarPersona($archivo, $dni){
        $lista = Leer::leerArchivo($archivo);
        
        unlink($archivo);
        foreach ($lista as $value) {
            if($value != null){
                if($value->dni != $dni){
                    $aux = array("nombre"=>$value->nombre,"apellido"=>$value->apellido,"dni"=>$value->dni);
                    Post::guardarArchivo($archivo, $aux);
                    echo "Se borro correctamente";
                }
            }
        }
    }



    
    public static function modificarArchivo($archivo, $dni, $nuevaPersona){
        $lista = Leer::leerArchivo($archivo);
        
        unlink($archivo);
        
        foreach ($lista as $value) {

            if($value != null){
                if($value->dni == $dni){                    
                    Post::guardarArchivo($archivo, $nuevaPersona);
                    echo "Se modifico correctamente";
                }
                else{
                    $aux = array("nombre"=>$value->nombre,"apellido"=>$value->apellido,"dni"=>$value->dni);
                    Post::guardarArchivo($archivo, $aux);
                }
            }
        }
        
    }


    public static function guardar($imagen, $nombre, $destino){

        $origen = $imagen['tmp_name'];
        $datos = $imagen['name'];

        $ext = array_reverse(explode(".", $imagen['name']));

        $foto = $nombre.'.'.$ext[0];

        move_uploaded_file($origen,"./fotos/".$foto);

        return $foto;
    }

}
?>