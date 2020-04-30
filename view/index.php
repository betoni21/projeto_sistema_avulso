<?php
include('../controller/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: principal.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login session</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<img class="esmam" style="width:125px;" src="./images/logo.png" alt="ESMAM"/>
<div class="container">
<form action="" method="post">
<input id="name" name="username" placeholder="LOGIN" type="text">
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<button class="button" name="submit" type="submit" value=" Login ">Entrar</button>
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>