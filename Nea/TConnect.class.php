<?php
class TConnect{
	const HOST 	= "localhost"; // Definição do host
	const USER 	= "root"; // Definição do usuário do banco de dados
	const PASS 	= ""; // Definição da senha do usuário do banco de dados
	const BANCO = "peixotinho"; // Nome do banco de dados
	private $sql; // Query SQL a ser executada
	private $id; // Identificador de conexão
	private $dados;

	function __construct(){
		if(!$this->id = mysqli_connect(self::HOST, self::USER, self::PASS, self::BANCO)){
			throw new Exception("Não foi possível se comunicar com o banco: ".self::BANCO,1);
		}
	}

	public function execQuery($stringQuery){
		$this->sql = $stringQuery;

		if(!$this->dados = mysqli_query($this->id,$this->sql)){
			throw new Exception("Error Processing Request", 1);
		}else{
			return $this->dados;
		}
	}

	public function resultSet(){
		return mysqli_fetch_assoc($this->dados);
	}

	public function contaLinha(){
		return mysqli_num_rows($this->dados);
	}

	public function getId(){
		return mysqli_insert_id($this->id);
	}
}
?>