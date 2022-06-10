<?php

    /*     ==================================================
        Path: 1. Introducción PHP\OperatorsAssignation.php
        Operadores de asignación
        = += *= /= .=
        ==================================================
    */

    $a = 10;
    
    $a += 5; //$a = $a + 5;
    echo $a. "\n"; //Igualamos la variable "a" y realizamos la Suma de la variable a + 5.
    
    $a *= 5; //$a = $a * 5;
    echo $a." \n"; //Igualamos la variable "a" y realizamos la Multiplicación de la variable a * 5.

    $a /= 5; //$a = $a / 5;
    echo $a."\n"; //Igualamos la variable "a" y realizamos la Division de la variable a / 5.

    $a -= 5; //$a = $a - 5;
    echo $a."\n"; //Igualamos la variable "a" y realizamos la Resta de la variable a - 5.

    $a .= 5; //$a = $a ." ". 5; 
    echo $a."\n"; // Concatenamos la variable "a" con el valor 5.

    $a = "abc"."edf";
    echo $a."\n"; // Concatenamos la variable "a" con el valor directamente.

    $a .= "ghij";
    echo $a."<br>"; // Concatenamos la variable "a" con el valor "ghij" directamente.

?>