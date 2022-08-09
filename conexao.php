<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'cadastros');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

class db{
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $database = 'cadastros';

	public function conecta_mysql(){
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		return $con;
	}
}
?>