<?php
$servername = "mysql.webcindario.com";
$username = "chelm";
$password = "Chelm4545";
$dbname = "chelm";

// Crear conexi�n
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexi�n
if ($conn->connect_error) {
    die("Conexi�n fallida: " . $conn->connect_error);
}
?>

