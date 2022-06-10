<?php

# Constructors 
	class Course {

		private $title;
		private $teacher;
		private $duration;
		private $cost;
		private $available;
		
		public function functionConstructor($title, $teacher, $duration, $cost, $available) {

			$this->title = $title;
			$this->teacher = $teacher;
			$this->duration = $duration;
			$this->cost = $cost;
			$this->available = $available;
		}
		

		# Encapsulation
		# Getter
		public function obtenerTitulo() {
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