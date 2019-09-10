<?php

class Persona{

    public $nombre;
    public $apellido;

    function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }


    public function saludo(){
        echo "Hola $this->nombre";
    }

    public function mostrar(){
        return json_encode($this);
    }
}

?>