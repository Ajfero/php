<?php

# While (Mientras) Structure
    /* 
        while ( condition ) {
            Bloque de código
            Detenerse
        }
    */

# While recorrerá un elemento hasta que se cumpla la condición.
/* 
	$i = 1;
	while ( $i < 5 ) {
		echo "El número es ".$i."<br />";
		$i++; //1 + 1 = 2; +2 = 3; +3 = 4;
        // Sumara 3 veces hasta llegar a 4. y dejara de sumar porque ya el proximo ciclo es 5.
	}
 */

# Recorrer un array con while
/* 
    $frutas = array ( 'naranja', 'manzana', 'plátano', 'uvas', 'mandarina' );
    $salir = 0;
    $i = 0;

    // While recorrerá las condicionales if y else hasta q se cumpla la condición salir =1
	while ( $salir != 1 ) {
        // Si el indice i es igual a uvas  salir sera 1
		if ( $frutas[$i] == 'uvas' ) {
			echo "<p>Encontré las uvas</p>";
			$salir = 1;
		} else {
            // Si no se cumple la condición imprimimos el valor y le sumamos uno al indice en post-decremento
			echo "<p>La fruta encontrada es ".$frutas[$i]."</p>";
			$i++;
		}
	}
 */

# Do-While (Hacer-Mientras) 
    // Este se ejecutara al menos una vez
        /* 
            incrementar
            do {
                bloque de código
            } while ( condición );
        */
    // Definimos la variable
    // Especificamos el do y su bloque de codigo
    // Ejecutara el bloque de codigo antes de consultar la condicional
    // Ahora Si el ciclo while se cumple o no ejecutara nuevamente o no el Do dependiendo de su estado.
    // En este caso 
        // Imprimimos el valor de i
        // Sumamos uno en posincremento 
        // Repetimos hasta llegar a cumplir 5 como condicion final.
/*         
    $i = 1;
    do {
        echo "Número ".$i."<br />";
        $i++;
    } while ( $i < 5);

 */

# Structure  For (Para) 
    // expresion1 = Evalua la iteración del ciclo, inicializa los datos.
    // expresion2 = Evaluación lógica, define las condiciones
    // expresion3 = Conclusión del ciclo
        /*
            for (expresion1; expresion2; expresion3) {
                bloque de código
            }
        */
/* 
    for ($i = 1; $i < 5; $i++) {
        echo "El número es ".$i."<br />";
    }
 */

/* 
    // En este caso sumara hasta i hasta 50
    // Tambien sumara j hasta 800 dado que se cumple una de las condiciones and
    for ($i = 10, $j = 200; $i < 50 and $j < 2000; $i+=10, $j+=200) {
        echo "El número es ".$i."<br />";
        echo "El número es ".$j."<br />";
    }
 */

# Foreach (Para cada) Structure. 
    /*
        foreach (arreglo AS valor) {
            bloque de código
        }
    */
    // Con esto iteraremos automáticamente entre los valores dado que asi funciona foreach
/* 
    $redesSociales = array("www.facebook.com", "www.twitter.com", "www.instagram.com", "www.flickr.com");
    foreach ($redesSociales AS $sm) {
        echo $sm."<br />";
    }
 */

/* 
    $redesSociales = array('FB' => 'www.facebook.com', 'TW' => 'www.twitter.com', 'IN' => 'www.instagram.com');
    foreach ($redesSociales AS $llave => $valor) {
        echo $llave." ".$valor."<br />";
    }
 */
?>