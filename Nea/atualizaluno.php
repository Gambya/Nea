<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
include_once("TConnect.class.php");
$idaluno = $_POST['idaluno'];
$nome= $_POST['nome'];
@$endereco= $_POST['endereco'];
@$numero = $_POST['numero'];
@$complemento = $_POST['complemento'];
@$cep = $_POST['cep'];
@$cidade= $_POST['cidade'];
@$bairro= $_POST['bairro'];
@$estado = $_POST['uf'];
@$pais = 'Brasil'; // Coloquei brasil pois vc não botou o campo input de país
$nasc= $_POST['nasc'];
$nome_mae= $_POST['nome_m'];
$nome_pai= $_POST['nome_p'];
@$telefone= $_POST['telefone'];
@$info= $_POST['id_info'];


	// Incluindo Aluno na base de dados
	$aluno = new TConnect();
	$sql = "UPDATE aluno SET nome = '$nome',nascimento = '$nasc', nomemae = '$nome_mae', nomepai = '$nome_pai' WHERE idaluno = $idaluno";
	$aluno->execQuery($sql);
	$idaluno = $aluno->getId();

	// Incluindo Endereço de aluno na tabela endereço
	/*$end  = new TConnect();
	$sqlend = "insert into endereco(endereco,numero,complemento,cep,bairro,municipio,estado,pais,idaluno) values (\"".utf8_decode($endereco)."\",\"$numero\",\"".utf8_decode($complemento)."\",\"$cep\",\"".utf8_decode($bairro)."\",\"".utf8_decode($cidade)."\",\"".utf8_decode($estado)."\",\"".utf8_decode($pais)."\",$idaluno)";
	$end->execQuery($sqlend);

	// Incluindo telefone do aluno na tabela telefone
	$tel = new TConnect();
	$sqlTel = "insert into telefone(telefone, idaluno) values($telefone,$idaluno)";
	$tel->execQuery($sqlTel);

	// Incluindo observação do aluno na tabela observação
	$obs = new TConnect();
	$sqlObs = "insert into observacao(observacao,idaluno)values(\"".utf8_decode($info)."\",$idaluno)";
	$obs->execQuery($sqlObs);*/
?>
</body>
</html>