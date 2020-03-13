<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexaoaluno = mysqli_connect($hostname, $user, $password, $database);

if(!$conexaoaluno){
	echo "Falha na conexão do Banco de dados".$database;
}

?>