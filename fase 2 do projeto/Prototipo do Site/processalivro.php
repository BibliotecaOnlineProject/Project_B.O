<?php

include_once("conexaolivro.php");

$imglivro = $_POST['imglivro'];
$titulolivro = $_POST['titulolivro'];
$generolivro = $_POST['generolivro'];
$numgenero = $_POST['numgenero'];
$nomeautor = $_POST['nomeautor'];
$qtdlivro = $_POST['qtdlivro'];
$resenhalivro = $_POST['resenhalivro'];

$sqllivro = "INSERT INTO cadastrolivro (imglivro, titulolivro, generolivro, numgenero, nomeautor, qtdlivro, resenhalivro) VALUES ('$imglivro', '$titulolivro', '$generolivro','$numgenero', '$nomeautor', '$qtdlivro', '$resenhalivro')";

$salvarlivro = mysqli_query($conexaolivro, $sqllivro);

mysqli_close($conexaolivro);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Online - Cadastros</title>
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
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastroaluno.php"><input type="button" value="Aluno" class="btnaba"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastroprof.php"><input type="button" value="Professor" class="btnaba"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastrolivro.php"><input type="button" value="Livro" class="btnaba"></a></h1>
			<br>

			<form method="post" action="processaaluno.php">
				Imagem de Capa<br>
				<input type="file" name="imglivro" class="campo"><br>
				Título do Livro <br>
				<input type="text" name="titulolivro" class="campo" maxlength="40" required autofocus><br>
				Genero do Livro<br>
				<input type="text" name="generolivro" class="campo" maxlength="50" required><br>
				Número de Gênero<br>
				<input type="number" name="numgenero" class="campo" minlength="1" maxlength="4" required><br>
				Nome do Autor<br>
				<input type="text" name="nomeautor" class="campo" minlegth="8" maxlength="60" required><br>
				Quantidade do Livro<br>
				<input type="text" name="qtdlivro" class="campo" maxlength="40" required><br>
				Editora do Livro<br>
				<input type="text" name="editoralivro" class="campo" maxlength="40" required><br>
				Resenha do Livro
				<input type="text" name="resenhalivro" class="campo" maxlength="3000"><br>
				<input type="submit" value="Cadastrar" class="btn">
				<br><br>
			</form>
		</section>
		<h2>Cadastro efetuado com sucesso</h2>
	</div>
</body>
</html>