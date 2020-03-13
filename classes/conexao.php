<?php 

class conectar{
	private $servidor = "35.247.250.82";
	private $usuario = "root";
	private $senha = "@fasam";
	private $bd = "sistema";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);
		
		return $conexao;
	}
}

 ?>