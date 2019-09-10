<?php
include './Clases/persona.php'; 
include './Clases/alumno.php';
include './Clases/funciones.php';


//var_dump($_GET);
/*
if(isset($_GET['nombre'])){
    
    $alumno = new Alumno($_GET['nombre'], $_GET['apellido']);
}

$datos = $alumno->mostrar();

echo $datos;
--------------------------------------------------------------------
$lista = array();
if(isset($_POST['nombre'])){
    $cantidad = $_POST['cantidad'];

    for ($i=0; $i < $cantidad ; $i++) { 
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $alumno = new Alumno($nombre, $apellido);
        array_push($lista, $alumno);
    }
}

echo json_encode($lista);
*/


//si no existe la $_SESSION["lista"] la crea

    session_start();

    //session_destroy();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){       
        $caso = $_GET['caso'];

        if($caso == "alumno"){
            echo Funciones::traerListado($caso);
        }
        else if($caso == "profesor"){
            echo Funciones::traerListado($caso);
        }
        

    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $caso = $_POST['caso'];

        if($caso == "alumno"){
            $alumno = new Alumno($nombre, $apellido);

            Funciones::guardar($alumno, $caso);
            echo "Alumno cargado";      
        }
        else if($caso == "profesor"){
            $profesor = new Alumno($nombre, $apellido);

            Funciones::guardar($profesor, $caso);
            echo "Profesor cargado";
        }
          
        
    }
    
    



?>


