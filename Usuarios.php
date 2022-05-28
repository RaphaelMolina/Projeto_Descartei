<?php
 Class Usuario {
	private $pdo;  
	public $msgErro="";
  	public function conectar($dbnome, $host, $usuario, $senha)
  	{
  		global $pdo;
      global $msgErro;
  		try
  		{
  			$pdo = new PDO("mysql:dbname=".$dbnome.";host=".$host,$usuario,$senha);
  		} catch (PDOException $e) {
  			$msgErro - $e->getMessage(); 
  		}
  	}
  	public function cadastrar($nome, $telefone, $email, $senha)
  	{
  		global $pdo;
      global $msgErro;
  	
  		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email=:e"); //pega o id do usuario buscando pelo emial preenchido no cadastro
  		$sql->bindValue(":e", $email);  //substitui o :e pelo email preenchido no cadastro
  		$sql->execute();
  		if($sql->rowCount()>0) //verificando houve resposta na consulta
  		{
  			return false; // ja tem cadastro
  		}
  		else
  		{
  			//caso nao tenha
  			$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e,:s)");
	  		$sql->bindValue(":n", $nome);
	  		$sql->bindValue(":t", $telefone);
	  		$sql->bindValue(":e", $email);
	  		$sql->bindValue(":s", md5($senha));
	  		$sql->execute();
	  		return true;
  		}

  	}
  	public function logar($email, $senha)
  	{
  		global $pdo;
      global $msgErro;
  	
  		$sql= $pdo->prepare("SELECT id FROM usuarios WHERE email=:e AND senha=:s");
  		$sql->bindValue(":e", $email);
  		$sql->execute();
  		if($sql->rowCount()>0) 
  		{
  	
  			$dado = $sql->fetch(); 
  			session_start();  
  			$_SESSION['id'] = $dado['id']; 
  			return true;  
  		}
  		else
  		{
  			return false; 
  		}
  	}
}
?>
