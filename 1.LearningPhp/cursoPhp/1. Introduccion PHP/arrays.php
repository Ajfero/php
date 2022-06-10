<?php

/* 
    Dado que "echo" solo puede emitir variables escalables no podra mostrar por terminal las variables.
*/
    
	$numbers = [];
    // var_dump($numbers); // Imprime el tipo de variable

	$numbers = array("hello", "world", "!");
	// print_r($numbers); // Imprimirá el valor y los indices de una variable
    
#Array indexados
	$days = ['Lunes', 'Martes', 'Miércoles', 'Jueves']; // Arreglo indexado es lo mismo que un array
	$days = array('Lunes', 'Martes', 'Miércoles', 'Jueves');
    // Recorrerá el array y Imprimirá el valor y el indice.
	// var_dump($days);
	// print_r($days); 
	
    // echo $days[2]; // Imprimirá el valor del indice 2

	$days[] = 'Viernes'; // Insertara en el array days el valor Viernes como ultimo elemento
	// var_dump($days);

	$days[10] = 'Saturday!!'; //Nos saltamos el indice hasta el 10.
	$days[6] = 'Sunday Day Free!!';
	var_dump($days);
    echo $days[6];

#Arrays Asociativos
    $usuario = ['nombre' => 'AjFernandez', 'edad' => 29, 'lenguaje' => 'PHP'];
	$usuario = array('nombre' => 'AjFernandez', 'edad' => 34, 'lenguaje' => 'PHP');
	// var_dump($usuario);
	// echo "Mi nombre es ".$usuario['nombre']."<br />";

	$alumnos = array(
		array('Juan', 20, 'México'), #Fila 1
		array('Salomé', 25, 'Perú'), #Fila 2,
		array('Carlos', 24, 'Bolivia'), #Fila 3,
		array('Homero', 37, 'Neza')
	);
	// echo $alumnos[1][0];
	// echo $alumnos[1][1];
	// var_dump($alumnos);


	$alumnos = [
		['Juan', 20, 'México'],
		['Salomé', 25, 'Perú']
	];
    // var_dump($alumnos);
    
#Arrays Multidimensional 
	$alumnos = array(
		array('nombre' => 'Juan', 'edad' => 20, 'país' => 'México'),
		array('nombre' => 'Salomé', 'edad' => 25, 'país' => 'Perú'),
		array('nombre' => 'Carlos', 'edad' => 24, 'país' => 'Bolivia')
	);
	// var_dump($alumnos);

	$alumnos[0]['calificacion'] = 9.5;
	// var_dump($alumnos);
	// echo "<b>".$alumnos[2]['edad'];
?> 