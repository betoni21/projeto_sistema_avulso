<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuario WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Usuário</title>
		<link rel="icon" href="images/logo_esmam.jpg" /><!--Inseri um icone no titulo da pagina "aba"-->
		<link href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
<style>
body {
  font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}
tr:hover {
  background-color:#3d80df;
  color: #fff;
}
thead tr:hover {
  background-color: transparent;
  color: inherit;
}
th {
  font-weight: normal;
  text-align: left;
}
table {
  background-size: 100% auto;
  display: none;
}
tr {
  height: 30px; 
}
tbody{
  display: none;
}
body{
  margin: 0 auto;
  width:80%;
}
a{
  float: left;
}
input{
	border: 0;
}
</style>		
	</head>
	<body>
		<a href="lista3.php">LISTAR</a><br>
		<h1>Editar Usuário</h1>
		<div class="table-responsive">
<table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center; width: 320px;">NOME</th>
                    <th scope="col" style="text-align: center; width: 470px;">E-MAIL</th>
                    <th scope="col" style="text-align: center; width: 200px;">TELEFONE</th>
                    <th scope="col" style="text-align: center; width:70px;"></th>
                </tr>
                </thead>        
</table>

		<form method="POST" action="proc_edit_usuario.php">
		<div class="table-responsive" style="display: block;">

  		<table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
            <tbody style="display: block;"> 
            <tr>
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">	
            <td style="text-align: left; width: 320px;"><input style="width: 300px;" type="text" name="nome" value="<?php echo $row_usuario['nome'];?>"></td>
            <td style="text-align: center; width: 470px;"><input style="width: 220px; type="email" name="email" value="<?php echo $row_usuario['email'];?>"></td>
            <td style="text-align: center; width: 200px;"><input type="text" name="telefone" value="<?php echo $row_usuario['telefone'];?>"></td>
            <td><input type="submit" value="Editar"></td>
            </tr>
            </tbody>
  		</table>
		</div>	
		</form>
	</body>
</html>