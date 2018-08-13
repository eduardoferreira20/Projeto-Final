<?php 

$modo = " ";
if (isset($_POST['modo'])){
	$modo = $_POST['modo'];
}
$senha = " ";
if(isset($_POST['senha'])){
	$modo=$_POST['senha'];
}



if($modo == 'alterar'){

	$sql = "UPDATE `info` SET  senha = '$senha' WHERE nome = '".$_POST['nome']."' ";
	$result = $conn->query($sql);

	if ($result) {
		echo "<script> alert('Senha alerada com sucesso'); window.location = 'login.php'";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Redefinir senha</title>
</head>
<body>
	<form method="POST" action="updateSenha.php">
		<div class="Senha">
			<label>Senha:</label><br><input type="password" name="senha" required>
		</div>
		<br>
		<br>
		<input type="hidden" name="modo" value="alterar"><button type="submit" class="botão">Alterar</button>

	</form>
</body>
</html>