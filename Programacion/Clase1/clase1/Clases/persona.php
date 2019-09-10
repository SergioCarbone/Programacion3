<?php

class Persona{

    public $nombre;

    function __construct($nombre){
        $this->nombre = $nombre;
    }


    public function saludo(){
        echo "Hola $this->nombre";
    }
}

?>