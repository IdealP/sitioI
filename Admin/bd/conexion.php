<?php
$servername = "localhost";
$database = "ideal";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexión fallida con la Base de Datos: " . mysqli_connect_error());
}
echo "Conectado correctamente a la Base de Datos";
mysqli_close($conn);
?>