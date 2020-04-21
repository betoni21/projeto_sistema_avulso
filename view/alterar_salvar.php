<?php 
	// definições de host, database, usuário
	$host = "localhost";
	$db   = "avulso";
	$user = "root";
	$pass = "";
	// conecta ao banco de dados
	$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);

	$id= $_POST['id'];
	$nome= $_POST['nome'];
	$email= $_POST['email'];
	$telefone= $_POST['telefone'];

	$sql= "UPDATE usuario SET nome='$nome', email='$email', telefone='$telefone' WHERE id;
	$resultado= mysqli_query($con,$s) or die("erro: ".mysql_error());
	echo 'alterado com sucesso';
	header('Location:pg_alterar.php');


 ?>