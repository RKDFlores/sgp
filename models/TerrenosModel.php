<?php
	
	class terrenos_model {
		
		private $db;
		private $terrenos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->terrenos = array();
		}
		
		public function get_terrenos()
		{
			$sql = "SELECT * FROM terrenos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->terrenos[] = $row;
			}
			return $this->terrenos;
		}
		
		public function insertar($placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("INSERT INTO terrenos (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
			
		}
		
		public function modificar($id, $placa, $marca, $modelo, $anio, $color){
			
			$resultado = $this->db->query("UPDATE terrenos SET placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM terrenos WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM terrenos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>