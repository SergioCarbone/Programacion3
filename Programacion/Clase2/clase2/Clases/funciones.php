<?php

class Funciones{

    public static function crearSession($caso){
        
        if($caso == "alumno"){
            if(!isset($_SESSION["alumno"])){
                $_SESSION["alumno"] = array();
                echo "Se creo una lista de alumnos<br>";
                
            }
        }

        if($caso == "profesor"){
            if(!isset($_SESSION["profesor"])){
                $_SESSION["profesor"] = array();
                echo "Se creo una lista de profesores<br>";
                
            }
        }
    }

    
    public static function guardar($alumno, $caso){
        Funciones::crearSession($caso);
        if($caso == "alumno"){
            array_push($_SESSION["alumno"],$alumno);
        }
        else if($caso == "profesor"){
            array_push($_SESSION["profesor"],$alumno);
        }
        
    }


    public static function traerListado($caso){
        Funciones::crearSession($caso); 
        if($caso == "alumno"){
            return json_encode($_SESSION["alumno"]);
        }
        else if($caso == "profesor"){
            return json_encode($_SESSION["profesor"]);
        }
        
    }



    

}


?>