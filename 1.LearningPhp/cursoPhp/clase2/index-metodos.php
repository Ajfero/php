<?php

	class Curso {

		public $publico = 'Público: POO Avanzado I';

		private $privado = 'Privado: POO Avanzado I';

		protected $protegido = 'Protegido: POO Avanzado I'; #Pendiente

		function obtenerMensajePrivado() {
			return $this->privado;
		}


	}

	$prueba = new Curso();
	echo "<p>".$prueba->publico."</p>";
	#echo "<p>".$prueba->privado."</p>";
	echo "<p>".$prueba->obtenerMensajePrivado()."</p>";
	#echo "<p>".$prueba->protegido."</p>";

?>