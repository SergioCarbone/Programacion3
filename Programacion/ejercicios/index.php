<?php
/*
echo "Ejercicio 1";
echo "<br/>";



$nombre = "Sergio";
$apellido = "Carbone";

echo $apellido.$nombre;

*/


/*
echo "Ejercicio 2";
echo "<br/>";
echo "<br/>";

$x = -3;
$y = 15;
$resultado = $x + $y;

echo "El resultado es: $resultado";
*/

/*
$x = -3;
$y = 15;
$resultado = $x + $y;

echo "Ejercicio 3";
echo "<br/>";
echo "<br/>";

echo "variable x: $x<br/>";
echo "<br/>";
echo "variable y: $y<br/>";
echo "<br/>";
echo "Resultado: $resultado<br/>";
*/


/*
echo "Ejercicio 4";
echo "<br/>";


$contador = 0;
$resultadoSuma = 0;

for ($i=0; ; $i++) { 
    
    if($resultadoSuma < 1000){

        if(($resultadoSuma + $i) < 1000){
            $resultadoSuma += $i;
            echo "$resultadoSuma<br/>";
            $contador ++;
        }
        else{
            break;
        }
    }
    else{
        break;
    }
}

echo "El resultado es: $resultadoSuma <br/>";
echo "Se sumaron: $i numeros <br/>";
*/

/*
echo "Ejercicio 5";
echo "<br/>";

$a = 6;
$b = 20;
$c = 8;

if(($a < $b) && ($a > $c) || ($a > $b) && ($a < $c)){
    echo "variable a: $a";
}
else if(($b < $a) && ($b > $c) || ($b > $a) && ($b < $c)){
    echo "variable b: $b";
}
else if(($c < $a) && ($c > $b) || ($c > $a) && ($c < $b)){
    echo "variable c: $c";
}
else{
    echo "no hay valor medio";
}
*/


/*
echo "Ejercicio 6";
echo "<br/>";

$operador = '*';
$op1 = 15; 
$op2 = 25;
$resultadoCalculadora;

echo "El primer numero es: $op1<br>";
echo "El segundo numero es: $op2<br>";
echo "El operador es: $operador<br>";
switch ($operador) {
    case '+':
        $resultadoCalculadora = $op1 + $op2;   
        echo "El resultado es: $resultadoCalculadora"; 
        break;
    case '-':
        $resultadoCalculadora = $op1 - $op2;    
        echo "El resultado es: $resultadoCalculadora";
        break;
    case '*':
        $resultadoCalculadora = $op1 * $op2;    
        echo "El resultado es: $resultadoCalculadora";
        break;        
    case '/':
        if($op2 != 0){
            $resultadoCalculadora = $op1 / $op2;
            echo "El resultado es: $resultadoCalculadora";
        }    
        else{
            echo "Error, no se puede dividir por 0";
        }
        break;    
    default:
        break;
}
*/


/*
echo "Ejercicio 7";
echo "<br/>";

$fecha = time();
echo date("d-m-Y (H:i:s)", $fecha);

echo "<br/>";
$dia = date("d", $fecha); // obtiene el dia actual
$mes = date("n"); //obtiene el mes actual

if($mes <= 3){
    if($mes == 3 && $dia < 21){
        echo "Estamos en verano";
    }
    else if($mes < 3){
        echo "estamos es verano";
    }
    else{
        echo "estamos en otoño";
    }
}
else if($mes >=4 && $mes <= 6){
    if($mes == 6 && $dia < 21){
        echo "estamos en otoño";
    }
    else{
        echo "estamos en invierno";
    }
}
else if($mes >= 7 && $mes <= 9){
    if($mes == 9 && $dia > 21){
        echo "estamos en primavera";
    }
    else{
        echo "estamos en invierno";
    }
}
else if($mes >= 10 && $mes <= 12){
    if($mes == 12 && $dia < 21){
        echo "estamos en primavera";
    }
    else{
        echo "estamos en verano";
    }
}
*/

/*
echo "Ejercicio 8";
echo "<br>";
echo "<br>";

$num = 25;

switch ($num) {
    case '20':
        echo "El numero es el veinte";
        break;

    case '21':
        echo "El numero es el veintiuno";
        break;

    case '22':
        echo "El numero es el veintidos";
        break;

    case '23':
        echo "El numero es el veintitres";
        break;

    case '24':
        echo "El numero es el veinticuatro";
        break;
    
    case '25':
        echo "El numero es el veinticinco";
        break;
}
*/

/*
echo "Ejercicio 9";
echo "<br>";

$array = array();
$resultado = 0;

for ($i=0; $i < 5; $i++) { 
    array_push($array,rand(1,15));
    $posicion = $i + 1;
    echo "El numero en la posicion $posicion es: $array[$i]<br>";
}

for($i=0; $i < 5; $i++){
    $resultado += $array[$i];
}
echo "<br>";
$promedio = $resultado/5;
if($promedio > 6){
    echo "El resultado es mayor a 6: $promedio";
}
else if($promedio == 6){
    echo "El resultado es igual a 6: $promedio";
}
else{
    echo "El resultado es menor a 6: $promedio";
}
*/

/*
echo "Ejercicio 10";
echo "<br>";

$array = array();
$contador = 0;

for ($i=0; $i < 20; $i++) { 

    if(($i % 2) == 1){
        array_push($array, $i);
        $contador++;
    }
    if($contador == 10){
        break;
    }
}

for ($i=0; $i < count($array) ; $i++) { 
    echo "numero: $array[$i]<br>";
}

echo "<br>";

$j = 0;
while($j < count($array)){
    echo "numero: $array[$j]<br>";
    $j++;
}

echo "<br>";

foreach ($array as $value) {
    echo "Numero: $value <br>";
}
*/

/*
echo "Ejercicio 11";
echo "<br>";

$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';

foreach ($v as $key => $value) {
    echo "El valor de v en $key es: $value<br>";
}
*/

/*
echo "Ejercicio 12 <br>";

$lapicera = array("color"=>"rojo","marca"=>"bic","trazo"=>"fino","precio"=>"45");
$lapicera1 = array("color"=>"azul","marca"=>"bic","trazo"=>"fino","precio"=>"15");
$lapicera2 = array("color"=>"verde","marca"=>"bic","trazo"=>"grueso","precio"=>"50");

var_dump($lapicera);
echo "<br>";
var_dump($lapicera1);
echo "<br>";
var_dump($lapicera2);
*/

/*
echo "Ejercicio 13<br>";

$animales = array();
$fecha = array();
$lenguaje = array();

array_push($animales, "Perro", "Gato", "Raton", "Araña", "Mosca");
array_push($fecha, "1986","1996","2015","78","86");
array_push($lenguaje, "php","mysql","html5","typescript","ajax");

$array = array_merge($animales,$fecha,$lenguaje);

var_dump($array);
*/

/*
echo "Ejercicio 14 <br>";

$animales = array();
$fecha = array();
$lenguaje = array();

array_push($animales, "Perro", "Gato", "Raton", "Araña", "Mosca");
array_push($fecha, "1986","1996","2015","78","86");
array_push($lenguaje, "php","mysql","html5","typescript","ajax");

$array = array_merge($animales,$lenguaje,$fecha);

$lista = array(array("color"=>"rojo","marca"=>"bic","trazo"=>"fino","precio"=>"45"),
               array("color"=>"azul","marca"=>"bic","trazo"=>"fino","precio"=>"15"),
               array("color"=>"verde","marca"=>"bic","trazo"=>"grueso","precio"=>"50"));


var_dump($array);
echo "<br>";
echo "<br>";
var_dump($lista);
*/




?>