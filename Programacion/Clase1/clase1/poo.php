<?php
include './Clases/persona.php'; 
include './Clases/alumno.php';
/*
si reemplazo include por require y el archivo persona no existe no va a funcionar el programa
*/

$persona = new Persona("Sergio");
$alumno = new Alumno("Carbone");


$alumno->saludo();
//$persona->saludo();
?>