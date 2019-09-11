<?php
include './acciones/post.php';
include './acciones/get.php';


$archivo = "archivo.txt";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':

        $lista = array();
        $lista = Get::leerArchivo($archivo);
        Get::imprimir($lista);
        break;

    case 'POST':
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];   
        $imagen = $_FILES['img'];
        $destino = "./fotos/";

        $caso = $_POST['caso']; 
        if($caso == "guardar"){
           
            $nombreImagen = Post::guardar($imagen, $dni, $destino);

            $aux = array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni, "nombreImagen"=>$nombreImagen);
            Post::guardarArchivo($archivo, $aux);
            break;
        }
        else if($caso == "modificar"){

            $nombreImagen = Post::guardar($imagen, $dni, $destino);

            $aux = array("nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni, "nombreImagen"=>$nombreImagen);
            Post::modificarArchivo($archivo, $dni, $aux);
        }
        else if($caso == "borrar"){
            $dni = $_POST['dni'];
            Post::borrarPersona($archivo,$dni);
        }
        
        
}




//copy(origen, destino)
//unlink(archivo) para borrar

//copy("archivo.txt", "nuevoArchivo.txt");
//unlink("archivo.txt");





?>