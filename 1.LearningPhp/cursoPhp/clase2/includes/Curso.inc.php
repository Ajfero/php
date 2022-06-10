<?php


	class Curso {

		private $titulo;
		private $profesor;
		private $duracion;
		private $costo;
		private $disponible;
		private $listado;


		#Creando nuestro constructor
		public function __construct($titulo, $profesor, $duracion, $costo, $disponible) {

			$this->titulo = $titulo;
			$this->profesor = $profesor;
			$this->duracion = $duracion;
			$this->costo = $costo;
			$this->disponible = $disponible;
		}


		#Encapsulación
		# Getter - Setter
		public function obtenerTitulo() {
			return $this->titulo;
		}

		public function obtenerProfesor() {
			return $this->profesor;
		}

		#Setter
		public function asignarTitulo($titulo) {
			$this->titulo = $titulo;
		}


	}


?>