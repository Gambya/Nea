<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
include_once("TConnect.class.php");

$nome = $_POST['id_nome'];
$usuario= $_POST['id_usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$conf_senha= $_POST['id_confsenha'];
$tipouser = $_POST['tipouser'];

if ($senha != $conf_senha){
	echo "senha nao confere";
}else{
	// Inserindo novo usuário na tabela usuário
	$user = new TConnect();
	$sql = "INSERT INTO usuario(nome,usuario,senha,email,idtipouser)VALUES(\"$nome\",\"$usuario\",\"$senha\",\"$email\",$tipouser)";
	$user->execQuery($sql);
}

?>
</body>
</html>