<?php

class GuardarImagen{
    
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