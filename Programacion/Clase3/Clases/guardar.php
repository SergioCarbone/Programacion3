<?php

class Guardar{


    public static function guardarArchivo($archivo, $aux){
        $ar = fopen($archivo, "a");
        fwrite($ar, json_encode($aux).PHP_EOL);

        fclose($ar);
        
    }
    



}
?>