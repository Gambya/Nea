<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>olá vc esta logado</title>
</head>
<body>
<?php
include_once("TConnect.class.php");
$usuario= $_POST ['usuario'];
echo $usuario;
$senha= $_POST ['senha'];

echo $senha;

$user = new TConnect();
$sql = "select usuario, senha from usuario where usuario = \"$usuario\" and senha = \"$senha\" limit 1";
$user->execQuery($sql);
$dadosUser = $user->resultSet();

echo $dadosUser["usuario"]." - ".$dadosUser["senha"];



?>
</body>
</html>