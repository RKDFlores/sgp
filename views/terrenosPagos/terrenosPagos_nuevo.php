<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=TerrenosPagos&a=addCuotas" autocomplete="off">
				<div class="form-group">
					<label for="txtidTerreno">CODIGO TERRENO</label>
					<input type="text" class="form-control" id="txtidTerreno" name="txtidTerreno" value="<?php echo $data["idTerreno"]; ?>" />
				</div>
				
				<div class="form-group">
					<label for="txtfechaPago">FECHA DE PAGO</label>
					<input type="text" class="form-control" id="txtfechaPago" name="txtfechaPago" />
				</div>
				<div class="form-group">
					<label for="txtObservacion">OBSERVACION</label>
					<input type="text" class="form-control" id="txtObservacion" name="txtObservacion" />
				</div>
			

				<?php 	echo "<select name='opciones'>";

				foreach($data["ListTipoVenta"] as $row) {
					echo "<option value='" . $row["id"] . "'>" . $row["descripcion"] . "</option>";
						}
						echo "</select>";
				?>




				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>


			
		</div>
	</body>
</html>