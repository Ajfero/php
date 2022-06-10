<?php

//  Para nuestras pruebas testing estos errores deben estar controlados y en el lado de producción deberían ser desactivados. 
// Con la funcionalidad de poder ocultar al cliente los datos sensibles.
// Esto se puede modificar desde el php.ini lo ideal es configurar este archivo con anterioridad.
// error_reporting('E_ERROR');

# Desactivar toda notificación de error;
    // En este caso vamos a desactivar todos los errores de nuestra aplicación. y no mostrara que falta una variable.
    error_reporting(0);
    $nombre = 'Hola';
	// echo $nombre;
	// echo $nombres;

# Guardar errores en un log
    echo $nombre;
	ini_set("log_errors", 1);
	ini_set("error_log", "/tmp/php-error.log");
	error_log("Hay un error");


#E_NOTICE informa de variables no inicializadas o capturar errores en nombres de variables
unset($nombre);
?>