<?php

include 'connection.php';

$modo = "";
if(isset($_GET['modo']))
	$modo = $_GET['modo'];

$login = "";
if(isset($_GET['login'])){
	$login = $_GET['login'];
}
$senha = "";
if(isset($_GET['senha'])){
	$senha = $_GET['senha'];
}
if($modo == 'inserir'){
	$sql = "SELECT `login`,`senha` FROM `info` WHERE login = '$login' AND senha = '$senha' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($row){
		echo "<script> alert('Login realizado com sucesso.'); window.location = 'perfil.php'</script>";
	}else{
		echo "<script> alert('Senha ou login incorreto.');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/CSS/login.css">
	<title>Login</title>
</head>
<body class="bod" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
	<div class="dados">
		<br>
		<br>
		<center><h2 style=" color:blackS;">Login:</h2></center>
		<form class="forma" method="GET" action="/CSS/login.php">
			<div class="dados-forma">
				<label>Login:</label>
				<input placeholder="Digite o seu login" name="login" type="text" >
			</div>
			<div class="dados-forma2">
				<br>
				<label>Senha:</label>
				<input placeholder="Digite a sua senha" name="senha" type="password" >
			</div>
			<input type="hidden" name="modo" value="inserir">
			<button class="btton" type="submit">login</button>
			<br>
			<p class="cadastro">É novo no site?<a href="cadastro.php"> Cadastre-se</a></p>
		</form>
	</div>
</body>
</html>