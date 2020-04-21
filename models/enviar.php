<?php
$host= "localhost";
$user= "root";
$pass= "";
$banco= "avulso";
$conexao = mysql_connect ($host, $user, $pass) or die (mysql_error());
mysql_select_db ($banco) or die (mysql_error());

date_default_timezone_set('America/Manaus');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$dia = date("d/m/Y");
$hora_entrada = date("H:i:s");
$sql=mysql_query("INSERT INTO usuario (nome , email, telefone, dia, hora_entrada) VALUES ('$nome','$email','$telefone','$dia','$hora_entrada')");

echo '<script type="text/javascript">
            alert("Registrado com Sucesso !");
            location.href="../view/principal.php";
      </script>';
?>
<html>
<head>

</head>
<style>
table {
  display: none;
}
</style>
</html>