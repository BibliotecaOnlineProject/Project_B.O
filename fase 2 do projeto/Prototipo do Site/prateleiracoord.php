<?php

include_once("conexaolivro.php");

$sqllivro = "select * from cadastrolivro";
$consulta = mysqli_query($conexaolivro, $sqllivro);
$registros = mysqli_num_rows($consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Online - Prateleira de Livros</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="prateleiracoord.php"><li>Prateleira de Livros</li></a>
				<a href="cadastros.php"><li>Cadastros</li></a>
				<a href="perfilcoord.php"><li>Perfil</li></a>
				<a href="configcoord.php"><li>Configurações</li></a>
				<a href="sair.php"><li>Sair</li></a>
			</ul>
		</nav>
		<section>
			<h1>Procurar um Livro</h1>
			<hr><br>

			<form method="get" action="">
				Filtrar por Gênero: <input type="text" name="generolivro" class="campo">
				<input type="submit" name="Buscar" class="btn" value="Buscar">
			</form>
		
		<?php
		if ($registros == 0) {
			print "Nenhum Livro encontrado, porfavor tente novamente...";
		}
			if ($registros == 1) {
				print "$registros livro encontrado";
				print "<br><br>";

		while ($exibirRegistros = mysqli_fetch_array($consulta)) {
		
		$imglivro = $exibirRegistros[0];
		$titulolivro = $exibirRegistros[1];
		$generolivro = $exibirRegistros[2];
		$numgenero = $exibirRegistros[3];
		$nomeautor = $exibirRegistros[4];
		$qtdlivro = $exibirRegistros[5];
		$resenhalivro = $exibirRegistros[6];
		
		print "<article>";

		print "$titulolivro<br>";
		print "$generolivro<br>";
		print "$numgenero<br>";
		print "$nomeautor<br>";
		print "$qtdlivro<br>"."Quantos Livros Disponiveis: ";
		print "$resenhalivro<br>";

		print "</article>";
		}
		}else{
		
		print "$registros Livros encontrados.";

		print "<br><br>";

		while ($exibirRegistros = mysqli_fetch_array($consulta)) {
		
		$imglivro = $exibirRegistros[0];
		$titulolivro = $exibirRegistros[1];
		$generolivro = $exibirRegistros[2];
		$numgenero = $exibirRegistros[3];
		$nomeautor = $exibirRegistros[4];
		$qtdlivro = $exibirRegistros[5];
		$resenhalivro = $exibirRegistros[6];
		
		print "<article>";

		print "$titulolivro<br>";
		print "$generolivro<br>";
		print "$numgenero<br>";
		print "$nomeautor<br>";
		print "$qtdlivro<br>"."Quantos Livros Disponiveis: ";
		print "$resenhalivro<br>";

		print "</article>";
		}
}
		?>
</section>
	</div>
</body>
</html>