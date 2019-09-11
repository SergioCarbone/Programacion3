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
        $lista = Get::leerArchivo($archivo);
        
        unlink($archivo);
        
        foreach ($lista as $value) {

            if($value != null){
                if($value->dni == $dni){

                    if($value->nombreImagen == $nuevaPersona['nombreImagen']){
                        $imagen = "./fotos/".$value->nombreImagen;
                        var_dump($imagen);
                        $destino = "./fotos/backUp/".$value->nombreImagen;

                        copy($imagen,$destino);
                        
                    }
                    else{
                        Post::guardarArchivo($archivo, $nuevaPersona);
                        echo "Se modifico correctamente";
                    }
                }
                else{
                    Post::guardarArchivo($archivo, $value);
                }
            }
        }
        
    }


    public static function guardar($imagen, $nombre, $destino){

        $origen = $imagen['tmp_name'];
        $datos = $imagen['name'];

        $ext = array_reverse(explode(".", $imagen['name']));

        $foto = $nombre.'.'.$ext[0];

        move_uploaded_file($origen,$destino.$foto);

        return $foto;
    }

}
?>