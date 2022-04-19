<?php
$i = 1; 
include_once "base.php";
$sentencia = $base_de_datos->query("SELECT matricula,ap_pa,ap_ma,nombre,curp,promedio FROM registro_alu;");
$alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>LISTADO DE ALUMNOS</title>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link" href="listar.php">Jose Vasconcelos</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listarB.php">Bata</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="listarC.php">Ceepam</a>
	</li>
	</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			
	<div class="col-xs-12">
		<h1>LISTA CEEPAM</h1>
		
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>NOMBRE DEL ALUMNO</th>
					<th>PLANTEL</th>
					<th>CURP</th>
					<th>PROMEDIO</th>
					<th>CERTIFICADO SECUNDARIA</th>
					<th>ACTA DE NACIMIENTO RECIENTE</th>
					<th>CURP VALIDADA</th>
					<th>DOCUMENTACIÓN DIGITAL</th>
					<th>EDITAR</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($alumnos as $alumno){ ?>
				<tr>
					<td><?php echo $i; $i++; ?></td>
					<td><?php echo $alumno->ap_pa , " " , $alumno->ap_ma, " " ,$alumno->nombre ?></td>
					<td></td>
					<td><?php echo $alumno->curp ?></td>
					<td><?php echo $alumno->promedio ?></td>
					<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
					<circle cx="8" cy="8" r="8"/>
					</svg></td>
					<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
					<circle cx="8" cy="8" r="8"/>
					</svg></td>
					<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
					<circle cx="8" cy="8" r="8"/>
					</svg></td>
					<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
					<circle cx="8" cy="8" r="8"/>
					</svg></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $alumno->matricula?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
					<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
					</svg></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
