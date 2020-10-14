<?php
include('../controller/session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Lucas Betoni">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" href="images/logo_esmam.jpg" /><!--Inseri um icone no titulo da pagina "aba"-->
<link href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="../models/js/validar.js"></script>
<script type="text/javascript" src="../models/js/campo_telefone.js"></script>
<link href="css/layout.css" rel="stylesheet" type="text/css"/>

<title>Sistema Avulso Digital</title>

</head>
<body>
<a style="position:fixed;margin-left:7px;" href="../controller/logout.php" class="material-icons" alt="logout"><span>power_settings_new</span></a>
    	<div id="container">
        <div id="parte2">
                <img src="images/texto.png" alt="" style="width: 100%">
            <br><br>
                    <form name="forms" action="../models/enviar.php" method="post" >
                        <div>
                            <input type="text" title="Preencha o campo Nome" required name=nome id="nome" class="form-control" placeholder="Nome Completo" />
                        </div>
                        <div>
                            <input type="text" title="Preencha o campo E-mail" required name=email id="email" class="form-control" placeholder="E-mail" />
                        </div>
                        <div>
                            <input type="text" title="Preencha o campo Telefone" required name=telefone id="telefone" class="form-control" placeholder="Telefone / Celular" maxlength="15" onkeypress="mascara(this)" pattern="\(\d{2}\)\s*\d{5}-\d{4}">
                        </div>
                        <div class="botao">
                            <button class="btn btn-primary" type="submit" style="width: 100%" onclick="return validar()">REGISTRAR</button>
                        </div>
                    </form>  
        </div>
        <div id="parte3"><a href="lista3.php" target="_blank"> Lista Geral</a><br></div>
    </div>
    <div class="rodape"><!-- Container close -->
            <small style="color: black;"><b>Copyright &copy; ESMAM 2019 - SISTEMA AVULSO DIGITAL<br>Desenvolvedor: Lucas Betoni<br> E-mail: lucasbetoni21@gmail.com</b></small>            
    </div>
</body>
</html>
