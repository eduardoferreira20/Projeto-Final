<?php

include 'connection.php';

$modo = "";
if(isset($_POST['modo']))
	$modo = $_POST['modo'];
$login = " ";
if (isset($_POST['login'])) {
	$login = $_POST['login'];
}
$senha = " ";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
}
$nome = " ";
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
}
$email = " ";
if(isset($_POST['email'])){
	$email = $_POST['email'];
}
$cpf = " ";
if(isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
}
$rg = " ";
if(isset($_POST['rg'])){
	$rg = $_POST['rg'];
}
$idade = " ";
if(isset($_POST['idade'])){
	$idade = $_POST['idade'];
}
$nomePai = " ";
if(isset($_POST['nomePai'])){
	$nomePai = $_POST['nomePai'];
}
$nomeMao = " ";
if(isset($_POST['nomeMao'])){
	$nomeMao = $_POST['nomeMao'];
}
$aniversario = " ";
if(isset($_POST['aniversario'])){
	$aniversario = $_POST['aniversário'];
}
if($modo == 'cadastrar'){
	
	$sql = "INSERT INTO info (login, senha, nome, email, cpf, rg, idade , nomePai, nomeMao, aniversario ) VALUES ('".$login."','".$senha."','".$nome."','".$email."','".$cpf."','".$rg."','".$idade."','".$nomePai."','".$nomeMao."','".$aniversario."');";

	if($conn->query($sql)==TRUE){

		echo "<script> alert('Dados salvos');
		window.location = 'login.php'</script>";
	}
}
?>
<!-- style="background-image: linear-gradient(to bottom, #bdc40f, #aace28, #95d73f, #7ddf56, #5de76e);" -->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/CSS/cadastro.css">
	<title>Cadastro</title>
</head>
<body>
	<div class="dados">

		<br>
		<h2 style=" color:black;">Cadastro:</h2>
		<form method="post" action="cadastro.php" class="form" >
			<div class="dados-forma">
				<label>Login:</label><br><input placeholder="Digite o seu login" name="login" type="text" required>
			</div>
			<div class="dados-forma1">
				<br>
				<label>Senha:</label><br><input placeholder="Digite a sua senha" name="senha" type="password" required>
			</div>
			<br>
			<div class="dados-forma2">
				<br>
				<label>Nome:</label><br><input class="nome" placeholder="Digite o seu nome completo" name="nome" type="text" required>
			</div>
			<div class="dados-forma3">
				<br>
				<label>e-mail:</label><br><input classe="mail" placeholder="user@hotmail.com" name="email" type="email" required>
			</div>
			<div class="dados-forma4">
				<br>
				<label>CPF:</label><br><input placeholder="Digite o seu CPF" name="cpf" type="text" required>
			</div>
			<div class="dados-forma5">
				<br>
				<label>RG:</label><br><input placeholder="Digite o seu RG" name="rg" type="text" required>
			</div>
			<div class="dados-forma6">
				<br>
				<label>Idade:</label><br><input name="idade" type="text">
			</div>
			<div class="dados-forma9">
				<br>
				<label>Data de nascimento:</label><br><input placeholder="xx/xx/xxxx" name="aniversario" type="text">
			</div>
			<div class="dados-forma7">
				<br>
				<label>Nome do pai:</label><br><input  name="nomePai" type="text">
			</div>
			<div class="dados-forma8">
				<br>
				<label>Nome da mãe:</label><br><input  name="nomeMao" type="text">
			</div>
			<br>
			<input type="hidden" name="modo" value="cadastrar">
			<button class="btton" name="cadastrar" type="submit">Salvar</button>
		</form>
		<div> 
		</div>
	</body>
	</html>