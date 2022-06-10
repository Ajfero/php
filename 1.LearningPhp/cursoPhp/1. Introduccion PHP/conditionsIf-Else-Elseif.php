<?php

# echo "Condicionales";
    /*
        if (condición) {
            bloque de código
        } else {
            bloque de código
        }
    */
    
# Confirmando si se cumple una condición de variable
/* 	
    $numero = 5;
	if ( $numero == 1 ) {
		echo "El número es igual a 1<br />";
	} else if ( $numero == 2) {
		echo "El número es igual a 2<br />";
	} else if ( $numero == 3) {
		echo "El número es igual a 3<br />";
	} else if ( $numero == 4) {
		echo "El número es igual a 4<br />";
	} else {
		echo "Es otro número<br />";
	}
 */

    // Declaramos la variable,
    // Definidos una condición como operador terniario
    // con el signo de ? declaramos el "if"
    // con el signo : declaramos el "esle"
# Operador terniario; Comorehention de variables
/* 
    $numero = 1;
    $a = ($numero == 1) ? 1 : 2;
	echo "El número es igual a ". $a ."<br />";
 */
    
# Estructura de condiciones Switch para casos independientes
    /* 
    switch ( condición ) {
        case X:
            bloque de código
            break;
            default:
            bloque de código
            break;
        }
    */
        
        
        
# Switch para casos independientes
/*         
    $numero = 3;
	switch ( $numero ) {
		case 1:
			echo "El número es igual a 1<br />";
			break;
		case 2:
			echo "El número es igual a 2<br />";
			break;
		case 3:
			echo "El número es igual a 3<br />";
			break;
		default:
			echo "Es otro número<br />";
			break;
	}
 */

# Condicionales con and 
/* 
    $calificacion = 85;
	if ($calificacion > 92) {
		$nota = 'A';
		$mensaje = 'Excelente';
	} elseif ($calificacion <= 92 and $calificacion > 83) { //84 hasta 92
		$nota = 'B';
		$mensaje = 'Bien';
	} elseif ($calificacion <= 83 and $calificacion > 74) {
		$nota = 'C';
		$mensaje = 'Regular';
	} elseif ($calificacion <= 74 and $calificacion > 62) {
		$nota = 'D';
		$mensaje = 'Mal';
	} else {
		$nota = 'F';
		$mensaje = 'Reprobado';
	}

	echo "Hola, saliste ".$mensaje." en tu examen, la nota final es ".$nota;
 */

# Condicional de un Array verificar si existe un valor
/* 
    $arreglo = []; 
    // $arreglo = [10, 20, 40];
	if (empty($arreglo)) {
		echo "Está vacío";
	} else {
		echo "Tiene datos";
	}
 */

/*     // $arreglo = []; 
    $arreglo = [10, 20, 40];
	if (!empty($arreglo)) {
        echo "Tiene datos";
    } else {
        echo "Está vacío";
	}
 */

# Condicional or para verificar si se cumplen dos condiciones y tener una definición.
/* 
    $curso1 = "Videojuegos";
	$curso2 = "Netflix";

	if ($curso1 == 'PHP' or $curso2 == 'MySQL'){
		echo "Eres un programador backend<br />";
	} else if ($curso1 == 'React' or $curso2 == 'Vue'){
		echo "Eres un programador frontEnd<br />";
	} else if ($curso1 == 'Android' or $curso2 == 'Swift') {
		echo "Eres un programador móvil<br />";
	} else {
		echo "Creo que no estás estudiando<br />";
	}
 */

# Operador === Para verificar si son realmente identicos.
    // Estimando que el tipo de dato y el valor se cumplan.
/* 
	$numero = 100;
	if ($numero === 100) {
		echo "Es identico";
	} else {
		echo "No es identico";
	}
 */

/*  
    $numero = '100';
    if ($numero === 100) {
        echo "Es identico";
    } else {
        echo "No es identico";
    }
 */
?>