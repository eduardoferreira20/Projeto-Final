<?php 

include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>olá</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

	$loginuser = $_SESSION["login"];
	$senhauser = $_SESSION["senha"];

	$sql = "SELECT * FROM `info` WHERE login = '$loginuser' AND senha = '$senhauser' ";	
	$result = $conn->query($sql);	
	$row = $result->fetch_assoc();

?>
	<div class="tabela">
	<table>
		<tr>
			<td ><h4 align="center">Login</h4></td>
			<td ><h4 align="center">Nome</h4></td>
			<td ><h4 align="center">Email</h4></td>
			<td ><h4 align="center">Cpf</h4></td>
			<td ><h4 align="center">Rg</h4></td>
			<td ><h4 align="center">Mãe</h4></td>
			<td ><h4 align="center">Pai</h4></td>
			<td ><h4 align="center">Nascimento</h4></td>
		</tr>
		<?php while ($row) { ?>
		<tr>
			<td><?php echo $row['login']; ?></td>
			<td><?php echo $row['senha']; ?></td>
			<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['cpf']; ?></td>
			<td><?php echo $row['rg']; ?></td>
			<td><?php echo $row['nomePai']; ?></td>
			<td><?php echo $row['nomeMao']; ?></td>
			<td><?php echo $row['aniversário']; ?></td>
		</tr>
		<?php  $row = $result->fetch_assoc(); } ?>
	</table>
		<a href="redefinirSenha.php"><button type="submit" class="botao">Redefinir Senha</button></a>
		<a href="login.php"><button type="submit" class="botao">Sair</button></a>
	</div>

</body>
</html>

<style type="text/css">
	.divTabela {
		width: 100%;
	}
	#tabela {
		text-align: center;
		border-color: black;
		margin-left: 0%;
	}
</style>

