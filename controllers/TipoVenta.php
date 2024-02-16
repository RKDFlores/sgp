<?php
	
	class tipoVentaController {
		
		public function __construct(){
			require_once "models/TipoVentaModel.php";

			$this->view = 'list_note';
			$this->page_title = '';
			$this->noteObj = new TipoVenta();
		}
		
		
	/* List all notes */
	public function listTpVenta(){
		$tipoVenta = new tipoVenta_model();
		return $this->$tipoVenta->get_tipoVenta();
	}



		public function index(){
			
			
			$tipoVenta = new tipoVenta_model();
			$data["titulo"] = "TIPO VENTA";
			$data["tipoVenta"] = $tipoVenta->get_tipoVenta();
			
			require_once "views/tipoVenta/tipoVenta.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "tipoVenta";
			require_once "views/tipoVenta/tipoVenta_nuevo.php";
		}
		
		public function guarda(){
			
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
			
			$tipoVenta = new tipoVenta_model();
			$tipoVenta->insertar($placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "tipoVenta";
			$this->index();
		}
		
		public function modificar($id){
			
			$tipoVenta = new tipoVenta_model();
			
			$data["id"] = $id;
			$data["tipoVenta"] = $tipoVenta->get_vehiculo($id);
			$data["titulo"] = "tipoVenta";
			require_once "views/tipoVenta/tipoVenta_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$tipoVenta = new tipoVenta_model();
			$tipoVenta->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "tipoVenta";
			$this->index();
		}
		
		public function eliminar($id){
			
			$tipoVenta = new tipoVenta_model();
			$tipoVenta->eliminar($id);
			$data["titulo"] = "tipoVenta";
			$this->index();
		}	
	}
?>