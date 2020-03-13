<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Online - Cadastros</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="imagem/png" href="https://avatars2.githubusercontent.com/u/61060107?s=400&u=fd41cdaa667b1b94355bc23b36aac6e783bc5f4d&v=4" />
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
	<h1>&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastroaluno.php"><input type="button" value="Alunos" class="btnaba"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastroprof.php"><input type="button" value="Professores" class="btnaba"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cadastrolivro.php"><input type="button" value="Livros" class="btnaba"></a></h1>
			<br>

			<form method="post" action="processaaluno.php">
				Foto do Aluno<br>
				<input type="file" name="imglivro" class="campo" ><br>
				Nome do Aluno<br>
				<input type="text" name="nomealuno" class="campo" maxlength="40" required autofocus><br>
				Email do Aluno<br>
				<input type="email" name="emailaluno" class="campo" maxlength="50" required><br>
				Senha do Aluno<br>
				<input type="password" name="senhaaluno" class="campo" minlength="8" maxlength="60" required><br>
				Turma e Ano do Aluno<br>
				<input type="text" placeholder="ex: Aquicultura III" name="turmaaluno" class="campo" maxlength="40" required><br>
				CPF do Responsavel<br>
				<input type="text" placeholder="000.000.008-00" name="cpfresp" class="campo" maxlength="14" required><br>
			<input type="submit" value="Cadastrar" class="btn">
				<br><br>
			</form>
		</section>
	</div>
</body>
</html>