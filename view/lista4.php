<?php
include('../controller/session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link rel="icon" href="images/logo_esmam.jpg" /><!--Inseri um icone no titulo da pagina "aba"-->
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
  <title>Lista Geral</title>
  <link href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
<style>
body {
  font: 75%/1.6 "Myriad Pro", Frutiger, "Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", Verdana, sans-serif;
}
thead {
  background: #ccc url(https://www.devfuria.com.br/html-css/tabelas/bar.gif) repeat-x left center;
  border-top: 1px solid #a5a5a5;
  border-bottom: 1px solid #a5a5a5;
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
td {
  border:1px solid;
}
tbody{
  display: none;
}
body{
  margin: 0 auto;
  width:75%;
}
a{
  float: right;
}
</style>
</head>
<body>
<div class="table-responsive">
<table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center; width: 320px;">NOME</th>
                    <th scope="col" style="text-align: center; width: 470px;">E-MAIL</th>
                    <th scope="col" style="text-align: center; width: 200px;">TELEFONE</th>
                    <th scope="col" style="text-align: center; width: 60px;"></th>
                </tr>
                </thead>        
</table>

</div>
<?php // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do{
?>          
<div class="table-responsive" style="display: block;">
  <table class="table table-hover" style="height: 56px; text-align: left; margin-right: auto; margin-left: 0px; width: 100%; display:block;">
            <tbody style="display: block;"> 
            <tr>
      
            <td style="text-align: left; width: 320px;"><?=$linha['nome']?></td>
            <td style="text-align: center; width: 470px;"><?=$linha['email']?></td>
            <td style="text-align: center; width: 200px;"><?=$linha['telefone']?></td>
            <td><a href='edit_usuario.php?id=" <?=$linha['id']?>"'>Editar</a></td>

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
?></div>

</body>
</html>
