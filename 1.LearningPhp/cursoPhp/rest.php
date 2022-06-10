
<!--
	Para esto renombramos el archivó .inc para saber que es un include
	Otros Programadores definirá el archivo como courseClass para saber que es una clase.
-->
<?php

	class Alumno {

		public $publico = 'Público: POO Avanzado I';
		public $public = 'Público: POO Avanzado I';
		private $privado = 'Privado: POO Avanzado I';
		protected $protegido = 'Protegido: POO Avanzado I'; #Pendiente hasta heredar clases.
        
		function obtenerMensajePrivado() {
			return $this->privado;
		}

	}
# Instancia test
	$prueba = new Alumno();
	// echo "<p>".$prueba->publico."</p>";
	// echo "<p>".$prueba->privado."</p>";
	// echo "<p>".$prueba->obtenerMensajePrivado()."</p>";
	// echo "<p>".$prueba->protegido."</p>";

	
# Constructors 
	class Course {
		private $title;
		private $teacher;
		private $duration;
		private $cost;
		private $available;
		
		function function_constructor($title, $teacher, $duration, $cost, $available) {
			$this->title = $title;
			$this->teacher = $teacher;
			$this->duration = $duration;
			$this->cost = $cost;
			$this->available = $available;
		}

# Encapsulation
	# Getter
		public function getTitle() {
			return $this->title;
		}

		public function getTeacher() {
			return $this->teacher;
		}

	#Setter
		public function setTitle($title) {
			$this->title = $title;
		}
	
	}

?>