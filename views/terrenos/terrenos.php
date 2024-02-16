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
			
			<a href="index.php?c=terrenos&a=nuevo" class="btn btn-primary">Agregar terreno</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>COD</th>
							<th>NOMBRE</th>
							<th>CANT CUOTAS</th>
							<th>IMPORTE CUOTAS</th>
							<th>DETALLE</th>
							<th>CUOTAS PAGAS</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["terrenos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["id"]."</td>";
							echo "<td>".$dato["descripcion"]."</td>";
							echo "<td>".$dato["numCuotas"]."</td>";
							echo "<td>".$dato["importeCuotas"]."</td>";
							echo "<td>".$dato["tamano"]."</td>";
							echo "<td>".$dato["numPagos"]."</td>";
							echo "<td><a href='index.php?c=terrenosPagos&a=nuevo&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=terrenos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>