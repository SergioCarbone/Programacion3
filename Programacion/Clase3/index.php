<?php
include './Clases/guardar.php';
include './Clases/guardarImagen.php';
include './Clases/leer.php';
include './Clases/modificar.php';
include './Clases/borrar.php';


$archivo = "archivo.txt";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $lista = array();
        $lista = Leer::leerArchivo($archivo);
        Leer::imprimir($lista);
        break;

    case 'POST':
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];   
        $imagen = $_FILES['img'];
        $destino = "./fotos/";

        $caso = $_POST['caso']; 
        if($caso == "guardar"){
           
            $nombreImagen = guardarImagen::guardar($imagen, $dni, $destino);

            $aux = array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni, "nombreImagen"=>$nombreImagen);
            Guardar::guardarArchivo($archivo, $aux);
            break;
        }
        else if($caso == "modificar"){

            $nombreImagen = guardarImagen::guardar($imagen, $dni, $destino);

            $aux = array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni, "nombreImagen"=>$nombreImagen);
            modificar::modificarArchivo($archivo, $dni, $aux);
        }
        else if($caso == "borrar"){
            $dni = $_POST['dni'];
            Borrar::borrarPersona($archivo,$dni);
        }
        
        
}




//copy(origen, destino)
//unlink(archivo) para borrar

//copy("archivo.txt", "nuevoArchivo.txt");
//unlink("archivo.txt");





?>