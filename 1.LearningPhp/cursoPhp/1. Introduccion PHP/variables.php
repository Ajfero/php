
<?php

# Rules
$names = "Anthony Fernandez";
$_name = "Anthony Fernandez";

# No se pueden usar caracteres especiales en las variables 
# Las variables son sensibles a mayúsculas y minúsculas.
# $first Name = "Anthony";
$lastName = "Fernandez";

    $color = 'Rojo';
    // echo $color;

    $Color = 'Azul';
    // echo $Color;

    $COLOR = 'Verde';
    // echo $COLOR;

    $color = 'Blanco';
    // echo $color;
    $color = 14.10;
    // echo $color;
 
#Imprimir todas las variables
// echo $color." ".$Color." ".$COLOR;



$integer =  14;
$floated = 14.10;
$negative = -1410;
// echo $integer." ".$floated." ".$negative;



$octal = 023;
$hexadecimal = 0x0F;
$binary = 0b01010101;
// echo $octal." ".$hexadecimal." ".$binary;



$nombre = "Anthony";
$apellido = "Fernandez";
$edad = 29;
$soltera = FALSE;
/* echo gettype($nombre). " \n";
var_dump($edad); */



# Asignar variable por referencia 
$variable = "Lorem ipsum";
$nueva = &$variable;
// echo $nueva. " \n";
$variable = "Nuevo dato";
echo $nueva." \n";

?>