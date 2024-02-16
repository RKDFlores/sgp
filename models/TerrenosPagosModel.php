<?php
	
	class terrenosPagos_model {
		
		private $db;
		private $terrenosPagos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->terrenosPagos = array();
		}
		
		public function get_terrenosPagos()
		{
			$sql = "SELECT * FROM terrenosPagos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->terrenosPagos[] = $row;
			}
			return $this->terrenosPagos;
		}
		
		public function addCuotas($txtidTerreno, $txtfechaPago, $txtObservacion){
			
			$resultado = $this->db->query("INSERT INTO terrenosPagos (idTerreno, fechaPago, Observacion) VALUES ('$txtidTerreno', '$txtfechaPago', '$txtObservacion')");
			
		}
		public function insertar($idTerreno, $importePagado, $modelo, $anio, $color){
			
			$resultado = $this->db->query("INSERT INTO terrenosPagos (idTerreno, importePagado, modelo, anio, color) VALUES ('$idTerreno', '$importePagado', '$modelo', '$anio', '$color')");
			
		}
		
		public function modificar($id, $idTerreno, $importePagado, $modelo, $anio, $color){
			
			$resultado = $this->db->query("UPDATE terrenosPagos SET idTerreno='$idTerreno', importePagado='$importePagado', modelo='$modelo', anio='$anio', color='$color' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM terrenosPagos WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM terrenosPagos WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>