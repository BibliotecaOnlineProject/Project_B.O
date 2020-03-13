<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexaoprof = mysqli_connect($hostname, $user, $password, $database);

if(!$conexaoprof){
	echo "Falha na conexão do Banco de dados".$database;
}

?>