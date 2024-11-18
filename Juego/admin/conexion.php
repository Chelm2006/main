<?php
//datos del servidor
$server		="mysql.webcindario.com";
$username	="chelm";
$password	="Chelm4545";
$bd			="chelm";

//creamos una conexi?n
$conn = mysqli_connect($server, $username, $password, $bd);

//Chequeamos la conexi?n
if(!$conn){
	die("Conexi?n fallida:" . mysqli_connect_error());
}

//Chequeamos la conexi?n
if(!$conn){
	die("Conexi?n fallida:" . mysqli_connect_error());
}

?>