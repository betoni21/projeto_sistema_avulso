<?php
session_start();
include('../controller/session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<?php // definições de host, database, usuário
$host = "localhost";
$db   = "avulso";
$user = "root";
$pass = "";
// conecta ao banco de dados
$conn = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $conn);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id, nome, email,telefone FROM usuario order by nome asc");
// executa a query
$dados = mysql_query($query, $conn) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Lista Geral</title>
  <link href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  <link rel="icon" href="images/logo_esmam.jpg" /><!--Inseri um icone no titulo da pagina "aba"-->
<style>
body {
  font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}

th {
  min-width: 250px;
}

tr {
  height: 30px; 
}
tbody{
  display: none;
}
body{
  margin: 0 auto;
  width:75%;
}
td{
  min-width: 250px; 
}

a{
  float: right;
}
</style>
</head>
<body>
<?php		
		if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
      <button type="button" class="close" data-dismiss="alert" onclick="window.close()">
      x</button>
      Um simples alerta success. Olha só!</div>';
      unset($_SESSION['msg']);	
		}
?>    
<a href="lista4.php">Editar</a><br>   
<div>
<table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center; width: 320px;">NOME</th>
                    <th scope="col" style="text-align: center; width: 470px;">E-MAIL</th>
                    <th scope="col" style="text-align: center; width: 200px;">TELEFONE</th>
                </tr>
                
                </thead>        
</table>

</div>
<?php // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do{
?>          
  <table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
            <tbody style="display: block;"> 
            <tr>
      
            <td style="text-align: left; width: 320px;"><?=$linha['nome']?></td>
            <td style="text-align: center; width: 470px;"><?=$linha['email']?></td>
            <td style="text-align: center; width: 200px;"><?=$linha['telefone']?></td>

            </tr>
            </tbody>
  </table>
<?php // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
        // fim do if 
    }
?>
<?php // tira o resultado da busca da memória
mysql_free_result($dados);
?>

</body>
</html>
