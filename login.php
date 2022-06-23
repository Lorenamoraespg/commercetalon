<?php
include("./function.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (contaValida($_POST["username"], $_POST["password"])) {
registraConta($_POST["username"]);
header("Location: ./crud.php");
exit;
}
$username = $_POST["username"];
$mensagem = "Username ou Password incorreto!";
}
include("./header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:lightblue;" >
<div class="container" >  </div>
<h1 style="color:black;">Informe os Dados de Login: </h1> 

<fieldset class="grupo">

<form name="formLogin" method="POST">
<table>
<tr>
<td colspan="2">
<?=isset($mensagem)?$mensagem:"";?>
</td>
</tr>
<tr>  
<td > Usuário:</td>
<td>
<input type="text" name="username"
value="<?=isset($username)?$username:"";?>">
</td>
</tr>
<tr>
<td>Senha:</td>
<td>
<input type="password" name="password"
value="<?=isset($password)?$password:"";?>">
</fieldset>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="Logar">
</td>
</tr>
</table>
</form>
<button><a href="menu.php">Menu</a></button>
<script language="JavaScript" type="text/javascript">
    
<!--
if (document.formLogin.username.value) {
document.formLogin.password.focus();
} else {
document.formLogin.username.focus();
}
//-->

</script>
</body>
</html>

<? include("./footer.php"); ?>
