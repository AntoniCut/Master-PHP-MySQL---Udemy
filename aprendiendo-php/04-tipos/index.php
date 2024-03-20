<?php

/*  
    TIPOS DE DATOS:
        Entero (int / integer). ej. 99
        Coma flotante o decimales. ej 3.45
        Cadenas de caracteres o String. ej "Hola, yo soy un String"
         Booleanos (bool)  true o false
         null
         Arrays o vectores (conjunto o coleccion de datos).
         Objetos  (Conjunto de datos y funciones independientes)
 */

//  Declaracion de distintos tipos de variables.
$numero = 100;
$decimal = 27.9;

$texto = "Soy un texto \"  $numero";

$verdadero = true;
$nula = null;

echo "<br>";
echo $texto;
echo '<br>';

//  Obtener el tipo de una variable. gettype()
echo gettype($numero) ."<br>";
echo gettype($decimal) ."<br>";
echo gettype($texto) ."<br>";
echo gettype($verdadero) ."<br>";
echo gettype($nula) ."<br>";

//  Debugear
$mi_nombre = "Antonio Cutillas";
var_dump($mi_nombre);

$nombres = ["Antonio Cutillas", "Victor Robles"];





?>