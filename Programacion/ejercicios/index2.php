<?php

/*
echo "Ejercicio 15<br>";

for ($i=1; $i < 5; $i++) { 
    for ($j=0; $j < 4; $j++) { 
        $resultado = pow($i,$j);
        echo "El $i a la potencia $j es igual: $resultado<br>";
    }
    echo "<br>";
}
*/

/*
echo "Ejercicio 16<br>";

$sort = array("H","O","L","A");
$sort.sort($sort);

$rsort = array("H","O","L","A");
$rsort.rsort($rsort);

$asort = array("H","O","L","A");
$asort.asort($asort);

$ksort = array("H","O","L","A");
$ksort.ksort($ksort);

$arsort = array("H","O","L","A");
$arsort.arsort($arsort);

$krsort = array("H","O","L","A");
$krsort.krsort($krsort);

for ($i=0; $i < count($sort) ; $i++) { 
    echo $sort[$i];    
}

echo "<br>";
for ($i=0; $i < count($rsort) ; $i++) { 
    echo $rsort[$i];    
}
echo "<br>";

for ($i=0; $i < count($asort) ; $i++) { 
    echo $asort[$i];    
}
echo "<br>";
for ($i=0; $i < count($ksort) ; $i++) { 
    echo $ksort[$i];    
}

echo "<br>";
for ($i=0; $i < count($arsort) ; $i++) { 
    echo $arsort[$i];    
}

echo "<br>";
for ($i=0; $i < count($krsort) ; $i++) { 
    echo $krsort[$i];    
}

*/

/*
echo "Ejercicio 17<br>";

$palabra = "Parcial";
$max = 3;


$retorno = validar($palabra,$max);
echo "respuesta: $retorno";

function validar($string, $int){
    $listado = array("Recuperatorio","Parcial","Programacion");
    $retorno = 0;

    if(strlen($string) <= $int){
        foreach ($listado as $value) {
            if($string == $value){
                $retorno = 1;
            }
        }
        return $retorno;
    }
    else{
        return "La palabra supera el limite";
    }
}
*/

/*
echo "Ejercicio 18<br>";

$num = 16;

$respuesta = esImpar($num);
//$respuesta = esPar($num);

if($respuesta){
    echo "El numero es par: TRUE";
}
else{
    echo "El numero es par: FALSE";
}


function esPar($valor){
    $retorno = 0;
    if(($valor % 2 ) == 0){
        $retorno = 1;
    }
    return $retorno;
}

function esImpar($valor){
    $retorno = 0;
    if(!esPar($valor)){
        $retorno = 1;
    }
    return $retorno;
}
*/

?>