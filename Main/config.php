<?php
$servername = "mysql.webcindario.com";
$username = "chelm";
$password = "Chelm4545";
$dbname = "chelm";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

