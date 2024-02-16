<?php
	
	class tipoVenta_model {
		
		private $db;
		private $tipoVenta;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->tipoVenta = array();
		}
		


//****************************************************** */
public function get_tipoVenta()
{
	$sql = "SELECT * FROM tipoventa";
	$resultado = $this->db->query($sql);
	while($row = $resultado->fetch_assoc())
	{
		$this->tipoVenta[] = $row;
	}
	return $this->tipoVenta;
}
//***************************************************** */
	
		
		public function insertar($placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("INSERT INTO tipoVenta (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
			
		}
		
		public function modificar($id, $placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("UPDATE tipoVenta SET placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM tipoVenta WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM tipoVenta WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>