<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["ap_P"]) || 
	!isset($_POST["ap_M"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["curp"]) || 
	!isset($_POST["prom"]) || 
	!isset($_POST["genera"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base.php";
$ap_P = $_POST["ap_P"];
$ap_M = $_POST["ap_M"];
$nombre = $_POST["nombre"];
$curp = $_POST["curp"];
$responsable = $_POST["responsable"];
$inci = $_POST["inci"];
$prom = $_POST["prom"];
$genera = $_POST["genera"];
$escuela = $_POST["escuela"];

$sentencia = $base_de_datos->prepare("UPDATE alumnosj SET  ap_P = ?, ap_M = ?, nombre = ?, curp = ?, responsable = ?, inci = ?, 
prom = ?, genera = ?, escuela = ? WHERE matricula = ?;");
$resultado = $sentencia->execute([$ap_P, $ap_M, $nombre, $curp, $responsable, $inci, $prom, $genera, $escuela]);

if($resultado === TRUE){
	header("Location: ./listarj.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como la matricula del alumno";
?>