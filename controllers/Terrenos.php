<?php
	
	class terrenosController {
		
		public function __construct(){
			require_once "models/TerrenosModel.php";
		}
		
		public function index(){
			
			
			$terrenos = new Terrenos_model();
			$data["titulo"] = "RESUMEN GENERAL DE TERRENOS";
			$data["terrenos"] = $terrenos->get_terrenos();
			
			require_once "views/terrenos/terrenos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Terrenos";
			require_once "views/terrenos/terrenos_nuevo.php";
		}
		
		public function guarda(){
			
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
			
			$terrenos = new terrenos_model();
			$terrenos->insertar($placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "terrenos";
			$this->index();
		}
		
		public function modificar($id){
			
			$terrenos = new terrenos_model();
			
			$data["id"] = $id;
			$data["terrenos"] = $terrenos->get_terrenos($id);
			$data["titulo"] = "terrenos";
			require_once "views/terrenos/terrenos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$terrenos = new terrenos_model();
			$terrenos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "terrenos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$terrenos = new terrenos_model();
			$terrenos->eliminar($id);
			$data["titulo"] = "terrenos";
			$this->index();
		}	
	}
?>