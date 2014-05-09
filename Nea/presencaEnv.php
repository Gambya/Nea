<?php
include_once("TConnect.class.php");

@$aluno		= $_POST['presente'];
$obs		= $_POST['obs'];
$data 		= date("Y-m-d");

// Inserindo observação na tabela obsaula
$obsaula = new TConnect();
$sqlObs = "insert into obsaula(observacao)values(\"$obs\")";
$obsaula->execQuery($sqlObs);
$idobs = $obsaula->getId();

// Inserindo presenças na tabela presenca
for ($i=0; $i < count($aluno) ; $i++) { 
	// Tratando a variavel $presente
	if(!isset($aluno[$i])){		
		$presente = 0;
	}else{
		$presente = 1;
	}
	try{
		$presenca = new TConnect();
		$sql = "insert into presenca(idaluno,data,presente,idobsaula)values(".$aluno[$i].",'$data',$presente,$idobs)";
		$presenca->execQuery($sql);
	}catch(Exception $e){
		echo $e->getMessage()."<br/>".$e->getCode()." - ".$e->getFile()." - ".$e->getLine();
	}
}
header("Location: presenca.php");
?>