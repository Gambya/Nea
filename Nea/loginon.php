<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
include_once("TConnect.class.php");
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];



$user = new TConnect();
$sql = "select usuario, senha from usuario where usuario = \"$usuario\" and senha = \"$senha\" limit 1";
$user->execQuery($sql);
$dadosUser = $user->resultSet();
$row = $user->contaLinha($sql);
if($row >0){
	$_SESSION['ativado'] = 1;
	echo "<center>você foi autenticando com sucesso! aguarde um instante</center>";
	echo "<script>loginsucessfully()<script>";
	header('Location:cadastro_aluno.php');
}else{
	echo"<center>Nome de usuario ou senha incorrretos, aguarde um instante para tentar novamente.</center>";
	echo"<Script>loginFailed()</script>";
	header('location:login.php');
}

?>
</body>
</html>