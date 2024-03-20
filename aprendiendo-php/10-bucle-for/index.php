<?php

/*  Bucles: Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces 
    como sea necesario, en base a una condicion.                             

   *****  Bucle FOR  *****
 * 
 *      for(variable contador, condicion, incremento contador) {
 *          bloque de instrucciones.
 *          otra instruccion.
 *      } 
*/


$resultado=0;

for($i=0; $i<=100; $i++) {
    
    $resultado += $i;
    echo "Resultado = $resultado, &nbsp; &nbsp; &nbsp;     ";
    if( $i % 10==0) echo "<br><br>";
}

echo "<h1> El resultado es: $resultado </h1>";


echo "<hr>";

$numero = $_GET['numero'];

echo "Tabla de multiplicar del $numero <br>";

for($i=0; $i<=10; $i++) {
    
    if($numero==45)  {
        echo "No quiero mostrar la tabla del 45";
        break;
    }
        
    echo "$numero x $i = " .($numero*$i) ."<br>";
}


?>