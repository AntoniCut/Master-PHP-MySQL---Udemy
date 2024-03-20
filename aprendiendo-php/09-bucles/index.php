<?php

/*  Bucles: Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces 
    como sea necesario, en base a una condicion.                             

   *****  Bucle WHILE  *****
 * 
 *      while(condigion) {
 *          bloque de instrucciones.
 *          otra instruccion.
 *      } 
*/
 
$numero=0;

while($numero <=100) {
    
    echo $numero;
    if($numero != 100) echo ", ";
       
    $numero++;
}

echo "<hr>";

//  Ejemplo con get.

if( isset($_GET['numero']) ) {
    
    //  Casting.
    $numero = (int)$_GET['numero'];
} else $numero=1;
    
var_dump($numero);

echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador=0;
while($contador<=10) {
    echo "$numero x $contador = " .($numero*$contador) ."<br>";
    $contador++;
}

echo "<hr>";

/*  *****  Bucle DO WHILE  *****
 * 
 * do {
 *      //  bloque de instrucciones.
 * }whule(condicion)
 */

$edad=17;
$contador=1;

do {
    
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
    
}while($edad>=18 && $contador<=10);


?>