<?php 
	
	$conn = mysqli_connect("localhost", "root", "", "ideal");
    
	// Check connection
	if($conn === false){
		die("ERROR: No se pudo conectar a la Base de Datos." 
			. mysqli_connect_error());
	}
	echo "Conectado correctamente a la Base de Datos";


  	$apellidop = $_REQUEST['apellidop'];
	$apellidom = $_REQUEST['apellidom'];
	$nombre = $_REQUEST['nombre'];
	$curp = $_REQUEST['curp'];
	$genero = $_REQUEST['genero'];
	$nacimiento = $_REQUEST['nacimiento'];
	$edad = $_REQUEST['edad'];
	$fecerti = $_REQUEST['fecerti'];
	$nivel = $_REQUEST['nivel'];
	$cuatri = $_REQUEST['cuatri'];
	$fereg = $_REQUEST['fereg'];
	$noapp = $_REQUEST['noapp'];
	$matricula = $_REQUEST['matricula'];
	$retro = $_REQUEST['retro'];
	$carrerat = $_REQUEST['carrerat'];
	$prom = $_REQUEST['prom'];
	$constana = $_REQUEST['constana'];
	$estatus = $_REQUEST['estatus'];
	$generacion = $_REQUEST['generacion'];
	$plantel = $_REQUEST['plantel'];
	$coord = $_REQUEST['coord'];
	$acta = $_REQUEST['acta'];
	$certsec = $_REQUEST['certsec'];
	$doccurp = $_REQUEST['doccurp'];
	$todos = $FILES['todos'];
  	

  	$query = "INSERT INTO registro_alu VALUES ('$apellidop', '$apellidom', '$nombre', '$curp', '$genero',
	  '$nacimiento', '$edad', '$fecerti', '$nivel','$cuatri','$fereg', '$noapp', '$matricula', '$retro', 
	  '$carrerat','$prom', '$constana', '$estatus', '$generacion',
	   '$plantel','$coord', '$acta', '$certsec','$doccurp', '$todos')";

	if(mysqli_query($conn, $sql)){
		echo "Datos Insertados Correctamente"; 
	} else{
		echo "Lo sentimos $sql. " 
			. mysqli_error($conn);
	}
	
	// Close connection
	mysqli_close($conn);

?>

  ?>