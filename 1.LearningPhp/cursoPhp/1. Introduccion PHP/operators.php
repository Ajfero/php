<?php
    /*
        ==================================================
        Operadores aritméticos

        Suma +, suma de a + b
        Resta -, diferencia de a - b
        Multiplicación *, producto de a * b
        División /, cociente de a y b
        Módulo %, resto de a dividido por b
        ==================================================
    */
    $a = 10;
    $b = 20;
    $c = 2;

    // Addition
    $sum = $a + $b;
    // echo "Sum = ".$sum."<br />";
    
    // Subtractions
    $subtract = $a - $b;
    // echo "Subtract = ".$subtract."<br />";

    // Multiplication
    $product = $a * $b;
    // echo "Product = ".$product."<br />";

    // Divisions
    $division = $a / $c;
    // echo "Division 1 = ".$division."<br />";

    $divisionDos = $c / $a;
    echo "Division 2 = ".$divisionDos."<br />";

    // Modulus
    $modulo = $a % $c;
    echo "Modulo 1 = ".$modulo."<br />";

    $moduloDos = $c % $a;
    echo "Modulo 2 = ".$moduloDos."<br />";

?>