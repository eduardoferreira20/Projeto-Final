<?php 

include 'connection.php';

$modo = " ";
if(isset($_POST['modo'])){
	$modo=$_POST['modo'];
} 
$cpf = " ";
if(isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
}
$nome= " ";
if(isset($_POST['nome'])){
	$nome=$_POST['nome'];
} 

if($modo == 'entrar'){

	$sql = "SELECT `cpf`,`nome` FROM `info` WHERE cpf = '$cpf' AND nome = '$nome' " ;

	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($row){

		echo "<script> alert('Conta encontrada'); window.location = 'updateSenha.php'</script>";

	}else{

		echo "<script> alert('CPF ou Nome incorretos');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Redefinir Senha</title>
</head>
<body>
	<form method="POST" action="redefinirSenha.php">
	<div class="mudar">
		<div class="CPF">
			<h1> Mudar senha:</h1>
			<p>Informe seu nome completo e o seu CPF.</p>
			<br>
			<br>
			<label>CPF: </label><br><input type="text" name="cpf" required>
		</div>
		<br>
		<div class="NOME">
			<label>Nome:</label><br><input type="text" name="nome" placeholder="Nome completo" required>
		</div>
		<br>
		<br>
		<input type="hidden" name="modo" value="entrar" ><button type="submite" class="botão">Entrar</button>
	</div>
</form>
</body>
</html>

<style>
.mudar
{
	margin-top: 11%;
	margin-left: 36%;
	border-style: ;
	width: 50%;
	margin-left: 24%;
}

.botão
{
	margin-left: 3%; 
}

</style>