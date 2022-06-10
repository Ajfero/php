<?php
    /* 
        ==================================================
        Operadores de incremento/decremento
        ++$variable, $variable++
        --$variable, $variable--
        ==================================================
    */

// addition 
    $valor = 15;
    echo $valor."<br>"; 
// Post Increment
    $nuevoValor = $valor++; // Dado que primero asignamos se posterga el incremento.El NuevoValor continuara siendo 15
    echo "FistAssign = ".$nuevoValor."<br>"; // El valor de la variable es 15
    echo "Increment = ". $valor. "<br>"; // Ahora si detectamos que El valor de la variable es 16

// subtract 
    $valorA = 15;
    echo $valorA."<br />";
// Pre Decrement
    $nuevoValorA = --$valorA; // Dado que primero restamos se posterga la asignacion.El NuevoValor sera 14
    echo "FirstDecrement = ". $nuevoValorA."<br />";  // El valor de la variable es 15 
    echo "Decrement = ".$valorA.  "<br />";   // El valor de la variable es 14

?>