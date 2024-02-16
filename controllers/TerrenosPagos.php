<?php
	
	class terrenosPagosController {
		
		public function __construct(){
			require_once "models/terrenosPagosModel.php";
			require_once "models/TipoVentaModel.php";
		}
		
//************************************************************************** */

//
public function indexo(){
         
	//Creamos el objeto usuario
	$usuario=new Usuario($this->adapter);
	 
	//Conseguimos todos los usuarios
	$allusers=$usuario->getAll();

	//Producto
	$producto=new Producto($this->adapter);
	$allproducts=$producto->getAll();
	
	//Cargamos la vista index y le pasamos valores
	$this->view("index",array(
		"allusers"=>$allusers,
		"allproducts" => $allproducts,
		"Hola"    =>"Soy Víctor Robles"
	));
}


//***************************************************************************** */
		public function index(){
			
			$data["titulo"] = "RESUMEN GENERAL DE PAGOS REALIZADOS";
			
			
		

			$terrenosPagos = new terrenosPagos_model();		
			$data["ListTerrenosPagos"] = $terrenosPagos->get_terrenosPagos();

			require_once "views/terrenosPagos/terrenosPagos.php";	
		}
		
		public function nuevo($id){
			
			$data["idTerreno"] = $id;
			$data["titulo"] = "terrenosPagos";

			$tipoVenta = new tipoVenta_model();
			$data["ListTipoVenta"] = $tipoVenta->get_tipoVenta();

			require_once "views/terrenosPagos/terrenosPagos_nuevo.php";
		}
		
		public function guarda(){
			
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
			
			$terrenosPagos = new terrenosPagos_model();
			$terrenosPagos->insertar($placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "terrenosPagos";
			$this->index();
		}
		
		public function modificar($id){
			
			$terrenosPagos = new terrenosPagos_model();
			
			$data["id"] = $id;
			$data["terrenosPagos"] = $terrenosPagos->get_terrenosPagos($id);
			$data["titulo"] = "terrenosPagos";
			require_once "views/terrenosPagos/terrenosPagos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$placa = $_POST['placa'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];

			$terrenosPagos = new terrenosPagos_model();
			$terrenosPagos->modificar($id, $placa, $marca, $modelo, $anio, $color);
			$data["titulo"] = "terrenosPagos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$terrenosPagos = new terrenosPagos_model();
			$terrenosPagos->eliminar($id);
			$data["titulo"] = "terrenosPagos";
			$this->index();
		}	
	}
?>