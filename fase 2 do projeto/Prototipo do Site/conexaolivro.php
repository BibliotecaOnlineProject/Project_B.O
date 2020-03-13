<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexaolivro = mysqli_connect($hostname, $user, $password, $database);

if(!$conexaolivro){
	echo "Falha na conexão do Banco de dados".$database;
}

?>