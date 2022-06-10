<?php
    
	#Arreglos y sus funciones nativas
	$cadena = '';
	$arreglo = [];
	$videojuegos = ['FIFA', 'Fortnite', 'Red Dead', 'Call of Dutty', 'Battlefield', 'Pokémon', 'GTA', 'The Sims', 'NFL'];

# Vacío - empty
    # Te demostrara si esta o no vacía en este caso un arreglo. El cual arrojara o no un True or False según sea el booleano. 
	// var_dump(empty($arreglo));
	// var_dump(empty($videojuegos));

# Existe - isset
	// var_dump(isset($videojuegos[50]));
	// var_dump(isset($videojuegos[0]));
    
# Counter - Contar elementos del arreglo, este comienza desde el indice 1. es por eso que dara 9 como resultado.
	// echo count($videojuegos);
	// var_dump(count($videojuegos[]);

# Punter - Antepenúltimo elemento
	$position = count($videojuegos) - 2;
	// echo $videojuegos[$position]." - ";
	// echo $videojuegos[7];

# Ordenar el arreglo de manera alfabética de manera Ascendente
	sort($videojuegos);
	// var_dump($videojuegos);

# Ordenar el arreglo sin perder su índice de manera Ascendente, Es decir le asignara el indice que tenia antes en el array.
	asort($videojuegos);
	// var_dump($videojuegos);

# Ordenar de manera inversa, segun sea la letra de manera Descendente. de la z-a
	rsort($videojuegos);
	// var_dump($videojuegos);

# Ordenar de manera inversa sin perder su índice, es decir de manera descendente con el indice del array anterior.
	arsort($videojuegos);
	// var_dump($videojuegos);

# array_sum ; Sumaría los valores del arreglo entre si.
	$numbers = [1, 20, 30, 15, 5, 10];
	$sum = array_sum($numbers);
	// echo "Mi suma es ".$sum;
    
    
# array_diff - Encontrar diferencia entre arreglos;
    // En este caso encontraremos la diferencia entre Salon A y Salon B.
    // Compararemos si en el SalonA están todas las personas del SalonA.
    // De no estar todas las personas imprimiremos los datos del Alumno que no están en el salon B.
    // No importa la clave o indice del array estamos evaluando es el valor.
	$salonA = ['a1' => 'Juan', 'a2' => 'Susana', 'a3' => 'Homero', 'a4' => 'Jaime'];
	$salonB = ['a1' => 'Santiago', 'a2' => 'Diego', 'a3' => 'Susana', 'a4' => 'Jaime'];
	$diferencia = array_diff($salonA, $salonB);
	// var_dump($diferencia);

# Array de video juegos
	$videojuegos = ['FIFA', 'Fortnite', 'Red Dead',
    'Call of Dutty', 'Battlefield',
    'Pokémon', 'GTA', 'The Sims', 'NFL'];
    
# Chunk - Dividir un arreglo especificando su tamaño.
    // En este caso dividiremos el arreglo en 2 partes de 5.
    // Indicamos que el primer arreglo tendrá los primeros 5 elementos. 
    $dividir = array_chunk($videojuegos, 5);
    // var_dump($dividir);

# Slice - Dividir el arreglo y eliminar valores
    // Slice nos permite dividir el arreglo en 2 partes, pero eliminando los últimos elementos según sea la cantidad de elementos que indicamos. 
    // var_dump( array_slice($videojuegos, 3) );

# Eliminar el último elemento
    array_pop($videojuegos);
    // var_dump($videojuegos);

# Agregar uno o más elementos al final del arreglo
    array_push($videojuegos, 'Smash Bros');
    // var_dump($videojuegos);

# Array de frutas
    $frutas = ['platano', 'uva', 'manzana'];
    $verduras = ['chile', 'tomate'];
    
# Array_merge - Unir arreglos frutas y veduras y crear un nuevo arreglo llamado unir
    $unir = array_merge($frutas, $verduras);
    // var_dump($unir);

# array_search - Buscar un elemento en el arreglo
    // Buscaremos segun sea el valor y mostrara el indice de la posicion encontrada segun sea en el un array.
    $numberAlumno = array(10, 8, 10, 5, 5, 3, 6, 5);
    $buscar = array_search(3, $numberAlumno);
    var_dump($buscar);

?>