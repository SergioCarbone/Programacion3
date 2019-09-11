<?php


class Get{

    public static function leerArchivo($archivo){
        $ar = fopen($archivo, "r");
        $lista = array();

        while(!feof($ar)){
            array_push($lista, json_decode(fgets($ar)));
        }

        fclose($ar);

        return $lista;
    }    
   
    public static function imprimir($lista){
        foreach ($lista as $value) {
            if($value != NULL){
             echo "Nombre: $value->nombre<br>"; 
             echo "Apellido: $value->apellido<br>";
             echo "Dni: $value->dni<br>";
             echo "Imagen: $value->nombreImagen<br>";
             echo "<br>";
            }
        }
    }


}



?>